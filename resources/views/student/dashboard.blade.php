@php
    $teacher_details = Auth::user();
    $courseData = [
        'labels' => ['1ST', '2ND'], // School years
        'data' => [
            \Illuminate\Support\Facades\DB::table('course_assignments')->where('teacher_id', $teacher_details->id)->count('course_id'),
            0, // Placeholder for future data
            0, // Placeholder for future data
            0  // Placeholder for future data
        ]
    ];
@endphp
<x-student-app-layout>
    <x-user-route-page-name :routeName="'student.dashboard'" />
    <x-teacher.section-div-style>

        <div class="container mx-auto p-4 uppercase -mb-8">
            <p class="mb-2 xl:text-3xl text-black font-bold">Welcome, <span class="text-red-500">{{ Auth::user()->name }}</span>!</p>
            <div class="border-t border-gray-600"></div>
        </div>

        {{-- <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
            <a href="{{ route('teacher.teachercourses.index') }}">
                <div class="bg-white rounded-md shadow-md flex items-center justify-between p-10 text-black font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl z-0" style="color: #24a0ff;"></i>
                    </div>
                    <div class="text-right">
                        <p class="text-4xl">{{ $courseData['data'][0] }}</p>
                        <p>Courses Enrolled</p>
                    </div>
                   
                </div>
                
            </a>
            
        </div> --}}
        {{-- <div class="flex  mt-2 ml-5">
            <button type="submit" id="addButton"  class="bg-blue-500 text-white px-4 py-2 rounded ">Add Courses</button>
        </div> --}}

        <div class="flex flex-wrap gap- 4 mt-2">
            <!-- Repeat this card for each class -->
            <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                        </div>
                        <div class="ml-4">
                            <div class="text-lg font-semibold text-gray-800">Class Title</div>
                            <div class="text-sm text-gray-600">Teacher's Name</div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-700">Description of the class. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                        </div>
                        <div>
                            <a href="#" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                        </div>
                        <div class="ml-4">
                            <div class="text-lg font-semibold text-gray-800">Class Title</div>
                            <div class="text-sm text-gray-600">Teacher's Name</div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-700">Description of the class. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                        </div>
                        <div>
                            <a href="#" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of card -->

            <button class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-base shadow-md">
            Add Class Code
        </button>
        </div>
        
{{-- 
        <div class="container mx-auto p-4">
            <div class="bg-white rounded  p-6 shadow-md w-full sm:w-72 md:w-3/4 lg:w-full">
                <canvas id="coursesChart" class="w-full h-auto sm:w-72 md:w-3/4 lg:w-full"></canvas>
            </div>
        </div> --}}
    </x-student.section-div-style>
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
</script>
