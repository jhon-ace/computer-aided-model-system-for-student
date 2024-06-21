<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.profile.edit'" />
    <x-section-div-style>
        <div class="container mx-auto p-4">
            <div class="rounded-md  text-black font-medium">
                <div class="max-w-full mx-auto sm:rounded-md">
                    <div class="p-4 sm:p-8 bg-white rounded-md text-black shadow sm:rounded-md">
                        <div class="text-black mb-5 text-md">Admin / Manage Profile</div>
                        <hr class="border-gray-200 my-4 ">  
                        <div class="max-w-xl">
                            @include('admin.profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="rounded-md p-4 mt-4 sm:p-8 bg-white shadow text-black sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('admin.profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 mt-4 sm:p-8 rounded-md bg-white shadow text-black sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('admin.profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </x-section-div-style>
</x-admin-app-layout>
