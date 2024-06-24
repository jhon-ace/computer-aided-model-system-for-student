<x-teacher-app-layout>
    <x-user-route-page-name 
        :routeName="'teacher.teacher.index'"
        :courseDetails="[
            'course_name' => $manageCourse->course->course_name,
            'time' => date('g:i A', strtotime($manageCourse->class_start_time)) . ' - ' . date('g:i A', strtotime($manageCourse->class_end_time)),
            'days_of_the_week' => $manageCourse->days_of_the_week,
            'section' => $manageCourse->section,
        ]"
    />
    <x-teacher.section-div-style>
        <div class="container mx-auto p-4 relative"> <!-- Added relative positioning -->
            <div class="rounded-md p-3 sm:p-4 md:p-6 lg:p-2 w-full h-18 sm:h-20 md:h-28 lg:h-24 lg:pt-4 bg-blue-500 mb-4 truncate">
                <span class="text-lg sm:text-sm md:text-2xl lg:text-3xl lg:ml-3 font-bold">
                    {{ $manageCourse->course->course_code }} - {{ $manageCourse->course->course_name }}
                </span><br>
                <span class="text-sm sm:text-md md:text-lg lg:text-xl lg:ml-3">
                    {{ $manageCourse->section }} | {{ date('g:i A', strtotime($manageCourse->class_start_time)) }} - {{ date('g:i A', strtotime($manageCourse->class_end_time)) }} {{ $manageCourse->days_of_the_week }}
                </span>
            </div>
            <!-- Menu's -->
            <div id="floatingMenu" class="fixed right-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-3 border-2 border-gray-400 text-black font-medium opacity-0 pointer-events-none transition-all duration-500">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-pen-to-square"></i> Classwork
                </a>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-pen-to-square"></i> People
                </a>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-pen-to-square"></i> Scores
                </a>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-file-pen"></i> Enroll Student
                </a>
            </div>
            <!-- Toggle Button for Adding of Components -->
            <div id="toggleButton2" class="fixed -right-1 top-1/2 transform -translate-y-1/2 z-50 bg-white text-gray-500 p-2 rounded-full shadow-md cursor-pointer">
                <svg id="toggleIcon2" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>

            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
                <div class="flex justify-start mb-4">
                    <div class="font-bold text-md tracking-tight text-black mt-2">My Courses</div>
                </div>
                <div class="overflow-x-auto">
                
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
    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.getElementById('toggleButton2');
        var menu = document.getElementById('floatingMenu');

        toggleButton.addEventListener('mouseover', function() {
            menu.classList.remove('opacity-0', 'pointer-events-none');
            menu.classList.add('opacity-100', 'pointer-events-auto');
            toggleButton.style.opacity = '0'; // Hide toggleButton when menu is shown
        });

        menu.addEventListener('mouseleave', function() {
            menu.classList.remove('opacity-100', 'pointer-events-auto');
            menu.classList.add('opacity-0', 'pointer-events-none');
            toggleButton.style.opacity = '1'; // Show toggleButton when menu is hidden
        });
    });
</script>

<style>
    #floatingMenu {
        transition: opacity 0.5s ease-in-out;
    }

    #toggleButton2 {
        transition: opacity 0.5s ease-in-out;
    }
</style>
