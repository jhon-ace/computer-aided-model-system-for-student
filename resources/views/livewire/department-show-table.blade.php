<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
    @if (session('success'))
        <x-sweetalert type="success" :message="session('success')" />
    @endif

    @if (session('info'))
        <x-sweetalert type="info" :message="session('info')" />
    @endif

    @if (session('error'))
        <x-sweetalert type="error" :message="session('error')" />
    @endif

    <div class="flex justify-between mb-4 sm:-mt-4">
        <div class="font-bold text-md tracking-tight text-black mt-2">Admin / Manage Department</div>
            <a href="{{ route('admin.department.create') }}">
                <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-plus fa-xs" style="color: #ffffff;"></i> Add Department
                </button>
            </a>
        </div>
        <hr class="border-gray-200 my-4">

        <div class="flex justify-end mb-4">
            <div class="flex justify-center sm:justify-end w-full sm:w-auto">
                <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
            </div>
        </div>

        <div class="overflow-x-auto">
            @if($search && $departments->isEmpty())
                <p class="text-black mt-8 text-center">No department found for matching "{{ $search }}"</p>
            @elseif(!$search && $departments->isEmpty())
                <p class="text-black mt-8 text-center">No data available in table</p>
            @else
                <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="border border-gray-400 px-3 py-2"><input type="checkbox" id="selectAll"></th>
                            <th class="border border-gray-400 px-3 py-2">
                                <button wire:click="sortBy('department_name')" class="w-full h-full flex items-center justify-center">
                                    Dept Name
                                    @if ($sortField == 'department_name')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-3 py-2">
                                <button wire:click="sortBy('department_description')" class="w-full h-full flex items-center justify-center">
                                    Dept Description
                                    @if ($sortField == 'department_description')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-3 py-2">Action</th>
                        </tr>
                    </thead>
                <form id="deleteSelectedForm" action="{{ route('admin.department.deleteSelected') }}" method="POST" onsubmit="return confirmDelete(event);">
                @csrf
                @method('DELETE')
                <input type="hidden" wire:model="deleteAllClicked" value="true">
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td class="text-black border border-gray-400 px-3 py-2"><input type="checkbox" name="selected[]" value="{{ $department->id }}"></td>
                                <td class="text-black border border-gray-400 px-3 py-2">{{ $department->department_name }}</td>
                                <td class="text-black border border-gray-400 px-3 py-2">{{ $department->department_description }}</td>
                                <td class="text-black border border-gray-400 px-3 py-2">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="{{ route('admin.department.edit', $department->id) }}" class="bg-blue-500 text-white text-sm px-3 py-1.5 rounded hover:bg-red-500">
                                            <i class="fas fa-edit fa-sm"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    <button type="submit" class="bg-red-500 text-white text-sm px-4 py-2 rounded hover:bg-red-700 mb-2">Delete Selected</button>
                </form>
                {{ $departments->links() }}
            @endif
        </div>
    </div>
</div>

<script>
    // Function to confirm delete action using SweetAlert2
    function confirmDelete(event) {
        event.preventDefault(); // Prevent form submission initially

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form programmatically
                document.getElementById('deleteSelectedForm').submit();
            }
        });
    }

    // Check all checkboxes when "selectAll" checkbox is clicked
    document.getElementById('selectAll').addEventListener('change', function(e) {
        const checkboxes = document.querySelectorAll('input[name="selected[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
    });
</script>

