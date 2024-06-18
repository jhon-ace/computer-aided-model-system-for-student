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
        <div class="font-bold text-md tracking-tight text-black mt-2">Admin / Manage Courses</div>
            <a href="{{ route('admin.course.create') }}">
                <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-plus fa-xs" style="color: #ffffff;"></i> Add Course
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
            @if($search && $courses->isEmpty())
                <p class="text-black mt-8 text-center">No course found for matching "{{ $search }}"</p>
            @elseif(!$search && $courses->isEmpty())
                <p class="text-black mt-8 text-center">No data available in table</p>
            @else
                <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4 ">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2"><input type="checkbox" id="selectAll"></th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_code')" class="w-full h-full flex items-center justify-center">
                                    Course Code
                                    @if ($sortField == 'course_code')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_name')" class="w-full h-full flex items-center justify-center">
                                    Course Name
                                    @if ($sortField == 'course_name')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_description')" class="w-full h-full flex items-center justify-center">
                                    Course Description
                                    @if ($sortField == 'course_description')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_semester')" class="w-full h-full flex items-center justify-center">
                                    Course Semester
                                    @if ($sortField == 'course_semester')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('program_id')" class="w-full h-full flex items-center justify-center">
                                    Course Program
                                    @if ($sortField == 'program_id')
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
                    <form id="deleteSelectedForm" action="{{ route('admin.course.deleteSelected') }}" method="POST" onsubmit="return confirmDelete(event);">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" wire:model="deleteAllClicked" value="true">
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td class="text-black border border-gray-400 px-4 py-2"><input type="checkbox" name="selected[]" value="{{ $course->id }}"></td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $course->course_code }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $course->course_name }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $course->course_description }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $course->course_semester }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">{{ $course->program->program_abbreviation }}</td>
                                    <td class="text-black border border-gray-400 px-4 py-2">
                                        <div class="flex justify-center items-center space-x-2">
                                            <div class="relative" x-data="{ open: false, showModal: false }">
                                                <div @click="open = !open" class="mr-5 cursor-pointer">
                                                    <a class="bg-slate-500 text-white text-sm mx-auto px-4 py-2 rig hover:bg-blue-700">Action <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></a>
                                                </div>
                                                <div x-show="open" @click.away="open = false" class="absolute right-4 mt-1.5 w-40 bg-white text-left border-2 border-gray-400 rounded-sm shadow-lg py-2 z-20">
                                                    <a href="{{ route('admin.course.edit', $course->id) }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                                    </a>
                                                    <hr class="border-gray-200">
                                                    <div x-data="{ showModal: false, courseId: {{ $course->id }}, courseCode: '{{ $course->course_code }}', courseName: '{{ $course->course_name }}'}">
                                                        <a href="#" @click="showModal = true" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                            <i class="fa-solid fa-file-pen"></i> Assign Teacher
                                                        </a>
                                                        
                                                        <!-- Modal backdrop, show/hide based on modal state -->
                                                        <div x-show="showModal" class="fixed inset-0 bg-black opacity-50"></div>

                                                        <!-- Modal dialog, show/hide based on modal state -->
                                                        <div x-show="showModal" class="w-full fixed inset-0 flex items-center justify-center z-50">
                                                            <!-- Modal content -->
                                                            <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 w-xl max-w-xl">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between items-center mb-4">
                                                                    <h3 class="text-lg font-semibold text-gray-900">Assign Course to Teacher</h3> 
                                                                    <a @click="showModal = false" class="cursor-pointer px-4 py-2 text-gray-400 rounded-md hover:text-blue-500">
                                                                        <i class="fa-solid fa-close"></i>
                                                                    </a>                                                          
                                                                </div>
                                                                <hr class="border-gray-200 mb-4">

                                                                <!-- Modal body -->
                                                                <p class=" text-gray-700 text-md w-full font-bold mb-2">Course: <span x-text="courseCode" class="text-red-500"></span> - <span x-text="courseName" class="text-red-500"></span></p>
                                                               <form id="assign-course-form" method="POST" action="{{ route('admin.course.assignCourse', $course->id) }}">
                                                                    @csrf
                                                                    <label for="semester" class="block text-gray-700 text-md w-72 font-bold mb-2">Select Teacher:</label>
                                                                    <select id="course_thaught_id" name="course_thaught_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('course_thaught_id') is-invalid @enderror" required>
                                                                        @php
                                                                            $hasTeacher = false;
                                                                        @endphp

                                                                        @foreach($teachers as $teacher)
                                                                            @php
                                                                                // Check if the program's department_id matches the faculty's department_id
                                                                                $programDepartmentId = $course->program->department_id ?? null;
                                                                                $facultyDepartmentId = $teacher->department_id;
                                                                            @endphp
                                                                            
                                                                            @if ($programDepartmentId === $facultyDepartmentId)
                                                                                @php $hasTeacher = true; @endphp
                                                                                <option lass="py-2 px-3  text-md text-black leading-tight focus:outline-none focus:shadow-outline" value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                                            @endif
                                                                        @endforeach

                                                                        @if (!$hasTeacher)
                                                                            <option class="py-2 px-3 text-md text-black leading-tight focus:outline-none focus:shadow-outline" value="" disabled>No teacher available for this course.</option>
                                                                        @endif
                                                                    </select>

                                                                    <!-- Modal footer -->
                                                                    <div class="mt-6 flex justify-end">
                                                                        <a @click="showModal = false" class="cursor-pointer px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none">
                                                                            Cancel
                                                                        </a>
                                                                        <a href="#" onclick="event.preventDefault(); document.getElementById('assign-course-form').submit();" class="cursor-pointer px-4 py-2 bg-blue-600 text-white rounded-md ml-4 hover:bg-blue-700 focus:outline-none">
                                                                            Save
                                                                        </a>
                                                                    </div>
                                                                </form>
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
                        <a href="#" onclick="event.preventDefault(); document.getElementById('deleteSelectedForm').submit();" class="cursor-pointer px-4 py-2 bg-blue-600 text-white rounded-md ml-4 hover:bg-blue-700 focus:outline-none">
                                Delete
                        </a>
                    </form>
            {{ $courses->links() }}
        @endif
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


