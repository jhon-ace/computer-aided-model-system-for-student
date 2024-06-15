<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.profile.edit'" />
    <x-section-div-style>
        <div class="h-full ml-14 mb-10 md:ml-48">
            <div class="max-w-full mx-auto  mt-10 sm:px-10  md:px-12 lg:px-10 xl:px-10 ">
                <div class="text-gray-700 ml-5 text-md">Admin / Manage Profile</div>
                    <div class="container mx-auto p-4 ">
                    
                    <div class="p-4 sm:p-8 bg-white text-black shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 mt-4 sm:p-8 bg-white shadow text-black sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 mt-4 sm:p-8 bg-white shadow text-black sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.profile.partials.delete-user-form')
                </div>
            </div>
                </div>
                
            </div>
        </div>
    </x-section-div-style>
</x-admin-app-layout>
