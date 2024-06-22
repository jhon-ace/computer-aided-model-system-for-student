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
        <div class="font-bold text-md tracking-tight text-black mt-2">Admin / Manage Teacher</div>
            <a href="{{ route('admin.teacher.create') }}">
                <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-plus fa-xs" style="color: #ffffff;"></i> Add Teacher
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
                @if($search && $teachers->isEmpty())
                    <p class="text-black mt-8 text-center">No teacher found for matching "{{ $search }}"</p>
                @elseif(!$search && $teachers->isEmpty())
                    <p class="text-black mt-8 text-center">No data available in table</p>
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
                    <form id="deleteSelectedForm" action="{{ route('admin.teacher.deleteSelected') }}" method="POST" onsubmit="return confirmDelete(event);">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" wire:model="deleteAllClicked" value="true">
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr class="hover:bg-gray-200">
                                <form id="deleteSelectedForm" method="POST" action="{{ route('admin.teacher.deleteSelected', $teacher->id) }}" onsubmit="return confirmDelete(event);">
                                @csrf
                                @method('DELETE')
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
                                </form>
                                    <td class="text-black border border-gray-400 px-4 py-2">
                                        <div class="flex justify-center items-center space-x-2">
                                            <div x-data="{ open: false }">
                                                <div @click="open = !open" class="mr-5 cursor-pointer">
                                                    <a class="bg-slate-500 text-white text-sm mx-auto px-4 py-2 rig hover:bg-blue-700">Action <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></a>
                                                </div>
                                                <div x-show="open" @click.away="open = false" class="absolute right-4 mt-1.5 w-40 bg-white text-left border-2 border-gray-400 rounded-sm shadow-lg py-2 z-20">
                                                    <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                        <i class="fa-solid fa-pen-to-square"></i> Edit Teacher
                                                    </a>
                                                    <hr class="border-gray-200">
                                                    <div x-data="{ showModal: false, teacherId: {{ $teacher->id }}, teacherName: '{{ $teacher->name }}', selectedCourse: '' }">
                                                        <a href="#" x-on:click="showModal = true"
                                                            class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                            <i class="fa-solid fa-file-pen"></i> View Course
                                                        </a>

                                                        
                                                        <!-- Modal backdrop, show/hide based on modal state -->
                                                        <div x-show="showModal" class="fixed inset-0 bg-black opacity-50"></div>

                                                            <!-- Modal dialog, show/hide based on modal state -->
                                                        <div x-show="showModal" class="w-full fixed inset-0 flex items-center justify-center z-50">
                                                            <!-- Modal content -->
                                                            <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 w-full max-w-7xl overflow-y-auto max-h-[680px]">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between items-center mb-4">
                                                                    <h3 class="text-lg font-semibold text-gray-900">Assigned Courses</h3>
                                                                    <a @click="showModal = false" class="cursor-pointer px-4 py-2 text-gray-400 rounded-md hover:text-blue-500">
                                                                        <i class="fa-solid fa-close"></i>
                                                                    </a>                                                           
                                                                </div>
                                                                <hr class="border-gray-200 mb-5">   
                                                                <!-- Modal body -->
                                                                 
                                                                <p>Teacher Name: <span x-text="teacherName " class="text-red-500 uppercase"></span></p>
                                                                <div style="overflow-x: auto;">
                                                                    <table class="table-auto border-collapse border bg-slate-100 border-gray-400 w-full text-sm text-center mt-4">
                                                                        <caption>Courses Assigned</caption>
                                                                        <thead class="bg-gray-50">
                                                                            <tr>
                                                                                <th class="border border-gray-400 px-4 py-2">Course Code</th>
                                                                                <th class="border border-gray-400 px-4 py-2">Course Description</th>
                                                                                <th class="border border-gray-400 px-4 py-2">Section</th>
                                                                                <th class="border border-gray-400 px-4 py-2">Unit/s</th>
                                                                                <th class="border border-gray-400 px-4 py-2">Schedule</th>
                                                                                <th class="border border-gray-400 px-4 py-2">Room</th>
                                                                                <th class="border border-gray-400 px-4 py-2">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-slate-100 divide-y divide-gray-200">
                                                                            @php
                                                                                $sortedCourses = $teacher->courses->sortBy([
                                                                                    ['days_of_the_week', 'asc'],
                                                                                    ['class_start_time', 'asc']
                                                                                ]);
                                                                            @endphp

                                                                            @foreach ($sortedCourses as $courseAssignment)
                                                                                <tr>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">
                                                                                        @if ($courseAssignment->course)
                                                                                            {{ $courseAssignment->course->course_code }}
                                                                                        @else
                                                                                            <span class="text-red-500">Course not found</span>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">
                                                                                        @if ($courseAssignment->course)
                                                                                            {{ $courseAssignment->course->course_name }}
                                                                                        @else
                                                                                            <span class="text-red-500">Course not found</span>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $courseAssignment->section }}</td>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">
                                                                                        @if ($courseAssignment->course)
                                                                                            {{ $courseAssignment->course->course_unit }}
                                                                                        @else
                                                                                            <span class="text-red-500">Course not found</span>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">
                                                                                        {{ $courseAssignment->days_of_the_week }} | 
                                                                                        {{ date('h:i A', strtotime($courseAssignment->class_start_time)) }} - 
                                                                                        {{ date('h:i A', strtotime($courseAssignment->class_end_time)) }}
                                                                                    </td>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">
                                                                                        @if ($courseAssignment->room)
                                                                                            {{ $courseAssignment->room }}
                                                                                        @else
                                                                                            <span class="text-gray-500 text-sm">Room not assigned</span>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="text-black border border-gray-400 px-4 py-2">
                                                                                        <form id="deleteAssignedCourse" method="POST" action="{{ route('admin.teacher.deleteAssignCourse', ['teacher_id' => $teacher->id, 'id' => $courseAssignment->id]) }}" onsubmit="return confirmDeleteAssignedCourse(event, {{ $courseAssignment->id }}, '{{ addslashes($courseAssignment->course->course_name ?? '') }}','{{ addslashes($courseAssignment->course->course_code ?? '') }}', '{{ $teacher->id }}');">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button type="submit" class="bg-red-500 text-white text-sm px-3 py-2 rounded hover:bg-red-700"><i class="fa-solid fa-trash"></i></button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach 
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                @if($teacher->courses->isEmpty())
                                                                    <p class="text-black mt-8 text-center">No courses assigned yet.</p>
                                                                @endif

                                                                <div class="flex justify-between">
                                                                    <div class="text-black mt-2">Total Course: 
                                                                        <span class="text-red-500">
                                                                            {{ $teacher->courseTotal }}
                                                                        </span>
                                                                    </div>
                                                                    <div class="text-black mt-2">Total Units: 
                                                                        <span class="text-red-500">
                                                                            {{ $teacher->totalUnits }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>       
                </table>
                <button id="deleteSelected" class="bg-red-500 text-white text-sm px-3 py-2 rounded hover:bg-red-700" onclick="confirmDelete(event)">
                    <i class="fa-solid fa-trash fa-xs" style="color: #ffffff;"></i> Delete Selected
                </button>
                {{ $teachers->links() }}
            @endif
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDeleteAssignedCourse(event, courseId, courseName, courseCode, teacherId) {
        event.preventDefault(); 

        Swal.fire({
            title: `Are you sure you want to remove assigned course ${courseCode} - ${courseName}?`,
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById('deleteAssignedCourse');
                form.action = `{{ route('admin.teacher.deleteAssignCourse', ['teacher_id' => ':teacherId','id' => ':courseId']) }}`
                    .replace(':teacherId', teacherId)
                    .replace(':courseId', courseId);
                form.submit();
            }
        });

        return false; 
    }
</script>

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
                // If confirmed, submit the deleteSelectedForm form programmatically
                document.getElementById('deleteSelectedForm').submit();
            }
        });
    }

    // Function to confirm teacher assignment action using SweetAlert2
    function confirmAssign(event) {
        event.preventDefault(); // Prevent form submission initially

        Swal.fire({
            title: 'Assign Teacher to Course?',
            text: "Are you sure you want to assign this teacher to the course?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, assign it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the assign-course-form form programmatically
                document.getElementById('assign-course-form').submit();
            }
        });
    }

    // Check all checkboxes when "selectAll" checkbox is clicked
    document.getElementById('selectAll').addEventListener('change', function(e) {
        const checkboxes = document.querySelectorAll('input[name="selected[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
    });
</script>

