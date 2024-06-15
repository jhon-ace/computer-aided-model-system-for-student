<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium">
    @if (session('success'))
        <x-success-message>
            {{ session('success') }}
        </x-success-message>
    @endif

    @if (session('info'))
        <x-info-message>
            {{ session('info') }}
        </x-info-message>
    @endif
    @if (session('error'))
        <x-error-message>
            {{ session('error') }}
        </x-error-message>
    @endif
    <div class="flex justify-between mb-4">
        <a href="{{ route('admin.teacher.create') }}">
            <button class="bg-blue-500 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">
                <i class="fa-solid fa-plus fa-md" style="color: #ffffff;"></i> Add
            </button>
        </a>
        <div class="flex justify-center sm:justify-end w-full sm:w-auto">
            <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
        </div>
    </div>
    <div class="overflow-x-auto">
        @if($teachers->isEmpty())
            <p class="text-black mt-10 text-center">No teacher found for matching "{{ $search }}"</p>
        @else
                <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2"><input type="checkbox" id="selectAll"></th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('teacher_photo')" class="w-full h-full flex items-center justify-center">
                                    Photo
                                    @if ($sortField == 'teacher_photo')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('name')" class="w-full h-full flex items-center justify-center">
                                    Teacher Name
                                    @if ($sortField == 'name')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('email')" class="w-full h-full flex items-center justify-center">
                                    Faculty Email
                                    @if ($sortField == 'email')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('department_id')" class="w-full h-full flex items-center justify-center">
                                    Department
                                    @if ($sortField == 'department_id')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('status')" class="w-full h-full flex items-center justify-center">
                                    Status
                                    @if ($sortField == 'status')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <form id="deleteSelectedForm" action="{{ route('admin.teacher.deleteSelected') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the selected faculty?');">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" wire:model="deleteAllClicked" value="true">
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td class="text-black border border-gray-400 px-4 py-2"><input type="checkbox" name="selected[]" value="{{ $teacher->id }}"></td>
                                    <td class="text-black border border-gray-400 px-4 py-2 flex  items-center justify-center">
                                        @if ($teacher->teacher_photo && Storage::exists('public/teacher_photos/' . $teacher->teacher_photo))
                                            <img src="{{ asset('storage/teacher_photos/' . $teacher->teacher_photo) }}" class="rounded-full w-9 h-9">
                                        @else
                                            <img id="imagePreview" src="{{ asset('assets/img/user.png') }}" class="rounded-lg w-9 h-9">
                                        @endif

                                    </td>

                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $teacher->name }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $teacher->email }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $teacher->department->department_name }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $teacher->status }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">
                                        <div class="flex justify-center items-center space-x-2">
                                            <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-red-500">
                                                <i class="fas fa-edit fa-md"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>       
                </table>
                    <button type="submit" class="bg-red-500 text-white text-sm px-4 py-2 rounded hover:bg-red-700 mb-2">Delete Selected</button>
                </form>
            {{ $teachers->links() }}
        @endif
    </div>
</div>

<script>
    document.getElementById('selectAll').addEventListener('change', function(e) {
        const checkboxes = document.querySelectorAll('input[name="selected[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
    });
</script>
