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
<x-teacher-app-layout>
    <x-user-route-page-name :routeName="'teacher.dashboard'" />
    <x-teacher.section-div-style>

        <div class="container mx-auto p-4 uppercase -mb-8">
            <p class="mb-2 xl:text-3xl text-black font-bold">Welcome teacher, <span class="text-red-500">{{ Auth::user()->name }}</span>!</p>
            <div class="border-t border-gray-600"></div>
        </div>

        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
            <a href="{{ route('teacher.teachercourses.index') }}">
                <div class="bg-white rounded-md shadow-md flex items-center justify-between p-10 text-black font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl z-0" style="color: #24a0ff;"></i>
                    </div>
                    <div class="text-right">
                        <p class="text-4xl">{{ $courseData['data'][0] }}</p>
                        <p>My Courses</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="container mx-auto p-4">
            <div class="bg-white rounded  p-6 shadow-md w-full sm:w-72 md:w-3/4 lg:w-full">
                <canvas id="coursesChart" class="w-full h-auto"></canvas>
            </div>
        </div>
    </x-teacher.section-div-style>
</x-teacher-app-layout>

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
                    label: 'My Courses',
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
                            text: 'Number of Courses Assigned', // Change the label here
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
