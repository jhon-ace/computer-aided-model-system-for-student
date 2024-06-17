<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.department.index'" />
    <x-section-div-style>
        <div class="container mx-auto p-4">
            <livewire:department-show-table />
        </div>
    </x-section-div-style>
</x-admin-app-layout>

<x-show-hide-sidebar
    toggleButtonId="toggleButton"
    sidebarContainerId="sidebarContainer"
    dashboardContentId="dashboardContent"
    toggleIconId="toggleIcon"
/>
