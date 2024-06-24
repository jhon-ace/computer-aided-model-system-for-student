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
    <div class="flex justify-between mb-4">
        @if(!$assignedCourses->isEmpty())
            <div class="font-bold text-md tracking-tight text-black mt-2">My Courses</div>
            <div class="flex justify-center sm:justify-end w-full sm:w-auto">
                <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
            </div>
        @elseif($search && $assignedCourses->isEmpty())
            <div class="font-bold text-md tracking-tight text-black mt-2">My Courses</div>
            <div class="flex justify-center sm:justify-end w-full sm:w-auto">
                <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
            </div>
        @else
        
        @endif
    </div>
    <div class="overflow-x-auto">
        @if($search && $assignedCourses->isEmpty())
            <p class="text-black mt-8 text-center">No course found for matching "{{ $search }}"</p>
        @elseif(!$search && $assignedCourses->isEmpty())
            <p class="text-black text-center text-lg">You have no courses assigned yet</p>
        @else
            <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-1">
                <thead class="bg-gray-200 text-black">
                    <tr>
                        <th colspan="6"><small>(click the column name to sort)</small></th>
                    </tr>
                    <tr>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('courses.course_code')">
                                Course Code
                                @if ($sortField == 'courses.course_code')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('courses.course_name')">
                                Course Description
                                @if ($sortField == 'courses.course_name')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('section')">
                                Section
                                @if ($sortField == 'section')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('courses.course_unit')">
                                Unit/s
                                @if ($sortField == 'courses.course_unit')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400" wire:click="sortBy('days_of_the_week')">
                                Schedule
                                @if ($sortField == 'days_of_the_week')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400" wire:click="sortBy('room')">
                                Room
                                @if ($sortField == 'room')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assignedCourses as $assignedCourse)
                    <tr class="hover:bg-gray-200 cursor-pointer"
                    onclick="window.location='{{ route('teacher.teacher.index', ['userID' => auth()->user()->id, 'assignmentTableID' => $assignedCourse->id, 'courseID' => $assignedCourse->course_id]) }}'">
                        @if ($assignedCourse->course)
                            <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->course->course_code }}</td>
                            <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->course->course_name }}</td>
                        @else
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                        @endif
                        <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->section }}</td>
                        @if ($assignedCourse->course)
                            <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->course->course_unit }}</td>
                        @else
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                        @endif
                        <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->days_of_the_week }} | {{ date('g:i A', strtotime($assignedCourse->class_start_time)) }} - {{ date('g:i A', strtotime($assignedCourse->class_end_time)) }}</td>
                        <td class="room-cell text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->room }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="tooltip" class="custom-tooltip"></div>
            {{ $assignedCourses->links() }}<br>
        @endif
    </div>
    <div class="flex justify-between">
        <div class="mt-1">
            <span class="text-red-500">Note: </span>Select the course to manage.
        </div>
        <div class="flex justify-start">
            <div class="text-black mt-1">Courses: 
                <span class="text-red-500">
                    {{ $teacher->courseTotal }}
                </span> | &nbsp;
            </div>
            <div class="text-black mt-1">Total Units: 
                <span class="text-red-500">
                    {{ $teacher->totalUnits }}
                </span>
            </div>
        </div>
    </div>
</div>

