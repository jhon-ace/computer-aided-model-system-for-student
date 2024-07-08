<div id="sidebarContainer" class="fixed flex flex-col left-0 w-[68px] hover:w-48 md:w-48 bg-gray-900 h-full text-black transition-all duration-300 border-r-2 border-gray-300 dark:border-gray-600 z-50 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow mr-0.5">
        <ul class="flex flex-col py-2 space-y-1 text-gray-800" >
            <a href="#" class="flex justify-center mt-5 mb-2">
                <img id="imagePreview" src="{{ asset('assets/img/logo.png') }}" class="rounded-lg w-24 h-auto object-contain">
            </a>
            <!-- <label class="relative flex flex-row justify-center items-center h-2  focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent  pr-3 ">
                <span class=" text-sm tracking-wide truncate text-white">{{ $teacher_details->name }}</span>
            </label>
            <label class="relative flex flex-row justify-center h-6 focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent   ">
                <span class=" text-xs tracking-wide truncate text-white">{{ $teacher_details->email }}</span>
            </label>
            <div class="border-t"></div> -->
            <li>
            <a href="{{route('teacher.dashboard')}}" class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl mt-1 hover:bg-blue-800 dark:hover:bg-slate-700 text-slate-700 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 {{ request()->routeIs('teacher.dashboard') ? ' rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : 'hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white' }}">
                <span class="inline-flex justify-center items-center ml-4">
                    <i class="fa-solid fa-gauge-high fa-lg text-white" style="color: #fffff;"></i>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate text-white">My Dashboard</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('teacher.teachercourses.index') }}"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        {{ request()->routeIs('teacher.teachercourses.index') || request()->routeIs('admin.department.edit') || request()->routeIs('admin.department.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : '' }}">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-file fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Course</span>
                </a>
            </li>
            @php
                $currentUserID = request()->route('userID');
                $currentAssignmentTableID = request()->route('assignmentTableID');
                $currentCourseID = request()->route('courseID');

                $assignedCoursesNav = \App\Models\CourseAssignment::where('teacher_id', Auth::id())
                        ->with('course')
                        ->get();

                                        
            @endphp

            @if($assignedCoursesNav->isEmpty())

            @else
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-white pl-5">Manage</div>
                    </div>
                    <hr class="border-white w-full">
                </li>
                <ul class="flex flex-col py-1 space-y-1 text-gray-800">
                    @php
                        // Step 1: Count the occurrences of each course code
                        $courseCounts = [];
                        foreach($assignedCoursesNav as $courseAssignment) {
                            $courseCode = $courseAssignment->course->course_code;
                            if (isset($courseCounts[$courseCode])) {
                                $courseCounts[$courseCode]++;
                            } else {
                                $courseCounts[$courseCode] = 1;
                            }
                        }

                        $iconMap = [];
                        $colorMap = [];
                        $icons = ['fa-file', 'fa-file', 'fa-file', 'fa-file-alt', 'fa-book']; // List of different icons
                        $colors = ['text-red-400', 'text-green-400', 'text-blue-400', 'text-yellow-400', 'text-purple-500']; // List of different text colors
                        $iconIndex = 0;
                        $colorIndex = 0;

                        foreach ($courseCounts as $courseCode => $count) {
                            $iconMap[$courseCode] = $icons[$iconIndex % count($icons)];
                            $colorMap[$courseCode] = $colors[$colorIndex % count($colors)];
                            $iconIndex++;
                            $colorIndex++;
                        }

                    @endphp

                    @foreach($assignedCoursesNav as $courseAssignment)
                        @php
                            $isActive = $currentCourseID == $courseAssignment->course->id && $courseAssignment->id == $currentAssignmentTableID;
                        @endphp
                        <li class="">
                            <a  href="{{ route('teacher.teacher.index', ['userID' => auth()->user()->id, 'assignmentTableID' => $courseAssignment->id, 'courseID' => $courseAssignment->course->id]) }}" class="{{ $isActive ? 'rounded-e-3xl border-l-green-500 text-red-500 bg-slate-700  dark:text-gray-200' : '' }} relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl mt-1 hover:bg-blue-800 dark:hover:bg-slate-700 text-white hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 "
                                data-tippy-content="{{ $courseAssignment->course->course_code }} - {{ $courseAssignment->course->course_name }}<br>{{ $courseAssignment->days_of_the_week }} {{ date('g:i A', strtotime($courseAssignment->class_start_time)) }} - {{ date('g:i A', strtotime($courseAssignment->class_end_time)) }} | {{ $courseAssignment->section}}">

                                    <span class="inline-flex justify-center items-center ml-4 {{ isset($colorMap[$courseAssignment->course->course_code]) ? $colorMap[$courseAssignment->course->course_code] : 'text-white' }}">
                                        @if(isset($iconMap[$courseAssignment->course->course_code]))
                                            <i class="fa-solid {{ $iconMap[$courseAssignment->course->course_code] }}"></i>
                                        @endif
                                    </span>
                                    <!-- for sm -->
                                    <span class="ml-2 text-sm tracking-wide truncate sm:hidden ">
                                        <ul>
                                            <li><span class="text-white">{{ $courseAssignment->course->course_code }} - {{ $courseAssignment->course->course_name }}</span></li>
                                            <li class="text-xs">{{ $courseAssignment->days_of_the_week }} {{ date('g:i A', strtotime($courseAssignment->class_start_time)) }} - {{ date('g:i A', strtotime($courseAssignment->class_end_time)) }} | {{ $courseAssignment->section}}</li>
                                        </ul>
                                        
                                    </span>
                                    <!-- for md -->
                                    <span class="ml-2 text-sm tracking-wide truncate hidden sm:inline-block">
                                        <ul>
                                            <li>{{ $courseAssignment->course->course_code }} - {{ $courseAssignment->course->course_name }}</li>
                                            <li class="text-xs">{{ $courseAssignment->days_of_the_week }} {{ date('g:i A', strtotime($courseAssignment->class_start_time)) }} - {{ date('g:i A', strtotime($courseAssignment->class_end_time)) }} | {{ $courseAssignment->section}}</li>
                                        </ul>
                                    </span>

                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </ul>
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs text-white">Copyright @2024</p>
    </div>
</div>
<!-- end of teacher navigation -->

<script>

document.addEventListener('DOMContentLoaded', function() {
    tippy('[data-tippy-content]', {
        allowHTML: true,
        theme: 'light', // Optional: Change the tooltip theme (light, dark, etc.)
        placement: 'right-end', // Optional: Adjust tooltip placement
    });
});

</script>