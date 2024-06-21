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
        <div class="font-bold text-md tracking-tight text-black mt-2 uppercase">List of Courses</div>
        <div class="flex justify-center sm:justify-end w-full sm:w-auto">
            <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
        </div>
    </div>
    <div class="overflow-x-auto">
        @if($search && $assignedCourses->isEmpty())
            <p class="text-black mt-8 text-center">No course found for matching "{{ $search }}"</p>
        @elseif(!$search && $assignedCourses->isEmpty())
            <p class="text-black mt-8 text-center">No data available in table</p>
        @else
            <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4">
                <thead class="bg-gray-200 text-black">
                    <tr>
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
                                Course Description
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
                            <button wire:click="sortBy('section')" class="w-full h-full flex items-center justify-center">
                                Section
                                @if ($sortField == 'section')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                            </button>
                        </th>
                        <th class="border border-gray-400 px-4 py-2">
                            <button wire:click="sortBy('course_unit')" class="w-full h-full flex items-center justify-center">
                                Unit/s
                                @if ($sortField == 'course_unit')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                            </button>
                        </th>
                        <th class="border border-gray-400 px-4 py-2">
                            <button wire:click="sortBy('days_of_the_week')" class="w-full h-full flex items-center justify-center">
                                Schedule
                                @if ($sortField == 'days_of_the_week')
                                    @if ($sortDirection == 'asc')
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    @else
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    @endif
                                @endif
                            </button>
                        </th>
                        <th class="border border-gray-400 px-4 py-2">
                            <button wire:click="sortBy('room')" class="w-full h-full flex items-center justify-center">
                                Room
                                @if ($sortField == 'room')
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
                <tbody>
                    @foreach ($assignedCourses as $assignedCourse)
                        <tr>
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
                            <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->days_of_the_week }} | {{ $assignedCourse->class_start_time }} - {{ $assignedCourse->class_end_time }}</td>
                            <td class="text-black border border-gray-400 px-4 py-2">{{ $assignedCourse->room }}</td>
                            <td class="text-black border border-gray-400 px-4 py-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div x-data="{ open: false, showModal: false }">
                                        <div @click="open = !open" class="mr-5 cursor-pointer action-button">
                                            <a class="bg-slate-500 text-white text-sm mx-auto px-4 py-2 rig hover:bg-blue-700">Action <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></a>
                                        </div>
                                        <div x-show="open" @click.away="open = false" class="absolute right-[91px] mt-1.5 w-40 bg-white text-left border-2 border-gray-400 rounded-sm shadow-lg py-2 z-20">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                <i class="fa-solid fa-pen-to-square"></i> Create Task
                                            </a>
                                            <hr class="border-gray-200">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                <i class="fa-solid fa-pen-to-square"></i> Create Exam
                                            </a>
                                            <hr class="border-gray-200">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                <i class="fa-solid fa-pen-to-square"></i> Create Module
                                            </a>
                                            <hr class="border-gray-200">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                <i class="fa-solid fa-file-pen"></i> Enroll Student
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $assignedCourses->links() }}
        @endif
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.action-button').forEach(button => {
        button.addEventListener('click', function () {
            // Remove highlight from all rows
            document.querySelectorAll('tr.highlight-row').forEach(row => {
                row.classList.remove('highlight-row');
            });

            // Highlight the current row
            let row = this.closest('tr');
            row.classList.add('highlight-row');

            // Close other dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (menu !== this.nextElementSibling) {
                    menu.style.display = 'none';
                }
            });

            // Toggle the visibility of the current dropdown menu
            let dropdownMenu = this.nextElementSibling;
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Close dropdown and remove highlight if clicked outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.action-button') && !event.target.closest('.dropdown-menu')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });
            document.querySelectorAll('tr.highlight-row').forEach(row => {
                row.classList.remove('highlight-row');
            });
        }
    });
});


</script>

