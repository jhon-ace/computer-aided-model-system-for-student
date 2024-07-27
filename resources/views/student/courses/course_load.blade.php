<x-teacher-app-layout>
    <x-user-route-page-name :routeName="'teacher.teacher-courses'" />
    <x-teacher.section-div-style>
        <div class="container mx-auto p-4 mt-2">
            <livewire:teacher.course-show-table />
        </div>
    </x-teacher.section-div-style>
</x-teacher-app-layout>

<x-show-hide-sidebar
    toggleButtonId="toggleButton"
    sidebarContainerId="sidebarContainer"
    dashboardContentId="dashboardContent"
    toggleIconId="toggleIcon"
/>