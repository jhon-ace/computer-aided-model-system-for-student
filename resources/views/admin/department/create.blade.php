<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.department.create'" />
    <x-section-div-style>
        <div class="container mx-auto p-4 ">
            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium mx-auto">
                <div class="flex justify-between mb-4 sm:-mt-4">
                    <div class="font-bold text-md tracking-tight text-black  -ml-3 px-3 py-2">Admin / Add Department</div>
                    <a href="{{ route('admin.department.index') }}">
                        <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to list
                        </button>
                    </a>
                </div>
                <hr class="border-gray-200 my-4 ">               
                <form action="{{ route('admin.department.store') }}" method="POST" class="">
                <x-caps-lock-detector />
                    @csrf
                    <div class="mb-4">
                        <label for="department_name" class="block text-gray-700 text-md font-bold mb-2">Department Name:</label>
                        <input type="text" name="department_name" id="department_name" value="{{ old('department_name') }}"  class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('department_name') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('department_name')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="department_description" class="block text-gray-700 text-md font-bold mb-2">Department Description</label>
                        <input type="text" name="department_description" id="department_description" value="{{ old('department_description') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('department_description') is-invalid @enderror" required>
                        <x-input-error :messages="$errors->get('department_description')" class="mt-2" />
                    </div>
                    <div class="flex mb-4 mt-5 justify-center">
                        <button type="submit" class="w-80 bg-blue-500 text-white px-4 py-2 rounded-md">
                             Save
                        </button>
                    </div>
                </form>
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
