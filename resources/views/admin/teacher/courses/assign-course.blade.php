<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.teacher.assignCourse'" />
    <x-section-div-style>
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
            <div class="font-bold text-md tracking-tight text-black">Admin / Manage Teacher / Add Course</div>
            <hr class="border-gray-200 my-4">
            <div class="mt-4">
                <div class="block text-md font-medium text-gray-700">Teacher Name: {{ $teacher->name}}</div>
                <label for="course-select" class="block text-md font-medium text-gray-700">Select Course:</label>
                <select id="course-select" name="course" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="">--Please choose an option--</option>
                    <option value="course1">Course 1</option>
                    <option value="course2">Course 2</option>
                    <option value="course3">Course 3</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
    </div>

    </x-section-div-style>
</x-admin-app-layout>

<x-show-hide-sidebar
    toggleButtonId="toggleButton"
    sidebarContainerId="sidebarContainer"
    dashboardContentId="dashboardContent"
    toggleIconId="toggleIcon"
/>

