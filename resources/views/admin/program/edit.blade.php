<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.program.edit'" />
    <x-section-div-style>
        <div class="container mx-auto p-4">
            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium">
                <div class="flex justify-between mb-4 sm:-mt-4">
                    <div class="font-bold text-md tracking-tight text-black  -ml-3 px-3 py-2">Admin / Edit program</div>
                    <a href="{{ route('admin.program.index') }}">
                        <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to list
                        </button>
                    </a>
                </div>
                <hr class="border-gray-200 my-4 ">     
                <form action="{{ route('admin.program.update', $program->id) }}" method="POST" class="">
                    <x-caps-lock-detector />
                    @csrf
                    @method('PUT')
                    <div class="mt-4">
                        <label for="department_id" class="block text-gray-700 text-md font-bold mb-2">Department Assign</label>
                        <select id="department_id" name="department_id"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('department_id') is-invalid @enderror" required>
                            @if($program->department->department_name)
                                <option value="{{ $program->department->id }}" selected>{{ $program->department->department_name }}</option>
                            @else    
                                <option value="" selected>Select Dean Status</option>
                            @endif
                        </select>
                        <small class="mt-2">
                            <span class="text-red-500">Note:</span> The department where program is assigned can't be changed.
                        </small>
                    </div>
                    <div class="mb-4">
                        <label for="program_abbreviation" class="block text-gray-700 text-md font-bold mb-2">Program Abbreviation:</label>
                        <input type="text" name="program_abbreviation" id="name" value="{{ old('program_abbreviation', $program->program_abbreviation) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <x-input-error :messages="$errors->get('program_abbreviation')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-md font-bold mb-2">Program Description:</label>
                        <input type="text" name="program_description" id="name" value="{{ old('program_description', $program->program_description) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <x-input-error :messages="$errors->get('program_description')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="status" class="block text-gray-700 text-md font-bold mb-2">Status:</label>
                        <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required autocomplete="status">
                            @if($program->status === 'Offered')
                                <option value="{{ $program->status }}" selected>{{ $program->status }}</option>
                                <option value="Not yet offered">Not yet offered</option>
                            @else
                                <option value="{{ $program->status }}" selected>{{ $program->status }}</option>
                                <option value="Offered">Offered</option>
                            @endif
                        </select>
                    </div>
                    <div class="flex  mb-4 mt-5 justify-center">
                            <button type="submit" class="w-80 bg-blue-500 text-white px-4 py-2 rounded-md">
                                Save Changes
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