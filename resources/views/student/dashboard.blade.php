@php
    $user = Auth::user();
@endphp
<x-student-app-layout>
    <x-user-route-page-name :routeName="'student.dashboard'" />
    <x-teacher.section-div-style>

        <div class="container mx-auto p-4 uppercase -mb-8">
            <p class="mb-2 xl:text-3xl text-black font-bold">Welcome, <span class="text-red-500">{{ $user->name }}</span>!</p>
            <div class="border-t border-gray-600"></div>
        </div>

        <div class="flex flex-wrap gap-4 mt-2">
            <!-- Repeat this card for each class -->
            @foreach ($courseAssignments as $courseAssignment)
                @foreach ($teachers as  $teacher)
                    @if ($courseAssignment->teacher_id === $teacher->id)
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                            <div class="flex items-center mb-4">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                                </div>
                                <div class="ml-4">
                                    <div class="text-lg font-semibold text-gray-800">{{ $courseAssignment->course->course_name }}</div>
                                    <div class="text-sm text-gray-600">{{ $teacher->name }}</div>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <p class="text-gray-700">{{ $courseAssignment->course->course_description }}</p>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <div>
                                    <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                                </div>
                                <div>
                                    <a href="{{ route('courses.show', $courseAssignment->course->id) }}" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                
            @endforeach
            <!-- End of card -->

            <div id="inviteCodeModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 opacity-0 pointer-events-none transition-opacity duration-500">
                <div class="bg-white rounded-lg p-6 max-w-md mx-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold text-black">Join Class</h3>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-800">
                            <i class="fa-solid fa-times"></i>
                        </button>
                    </div>
                    <label for="course_code" class="block text-gray-700 text-md font-bold mb-2">Class Code:</label>
                    <input type="text" name="course_code" id="course_code" value="{{ old('course_code') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('course_code') is-invalid @enderror" required autofocus>
                    <button id="closeModalBottom" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">
                       Join
                    </button>
                </div>
            </div>
            <button id="openModal" class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-base shadow-md">
                Add Class Code
            </button>
        </div>

    </x-teacher.section-div-style>
</x-student-app-layout>

<x-show-hide-sidebar
    toggleButtonId="toggleButton"
    sidebarContainerId="sidebarContainer"
    dashboardContentId="dashboardContent"
    toggleIconId="toggleIcon"
/>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('coursesChart').getContext('2d');
        var coursesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($courseData['labels']), // Convert PHP array to JSON
                datasets: [{
                    label: 'Courses',
                    data: @json($courseData['data']), // Convert PHP array to JSON
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.5
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Semester',
                            font: {
                                size: 16
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Courses Enrolled', // Change the label here
                            font: {
                                size: 16
                            }
                        }
                    }
                }
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const openModalButton = document.getElementById('openModal');
        const closeModalButtons = document.querySelectorAll('#closeModal, #closeModalBottom');
        const modal = document.getElementById('inviteCodeModal');

        openModalButton.addEventListener('click', function () {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
        });

        closeModalButtons.forEach(button => {
            button.addEventListener('click', function () {
                modal.classList.remove('opacity-100', 'pointer-events-auto');
                modal.classList.add('opacity-0', 'pointer-events-none');
            });
        });
    });
</script>
