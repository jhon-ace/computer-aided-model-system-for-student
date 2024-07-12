<div id="sidebarContainer" class="fixed flex flex-col left-0 w-[68px] hover:w-48 md:w-48 bg-gray-900 h-full text-black transition-all duration-300 border-r-2 border-gray-300 dark:border-gray-600 z-50 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow mr-0.5">
        <ul class="flex flex-col py-2 space-y-1 text-gray-800" >
            <a href="#" class="flex justify-center mt-5 mb-2">
                <img id="imagePreview" src="<?php echo e(asset('assets/img/logo.png')); ?>" class="rounded-lg w-24 h-auto object-contain">
            </a>
            <!-- <label class="relative flex flex-row justify-center items-center h-2  focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent  pr-3 ">
                <span class=" text-sm tracking-wide truncate text-white"><?php echo e($teacher_details->name); ?></span>
            </label>
            <label class="relative flex flex-row justify-center h-6 focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent   ">
                <span class=" text-xs tracking-wide truncate text-white"><?php echo e($teacher_details->email); ?></span>
            </label>
            <div class="border-t"></div> -->
            <li>
            <a href="<?php echo e(route('student.student.dashboard')); ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl mt-1 hover:bg-blue-800 dark:hover:bg-slate-700 text-slate-700 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 <?php echo e(request()->routeIs('teacher.dashboard') ? ' rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : 'hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white'); ?>">
                <span class="inline-flex justify-center items-center ml-4">
                    <i class="fa-solid fa-gauge-high fa-lg text-white" style="color: #fffff;"></i>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate text-white">My Dashboard</span>
                </a>
            </li>
            <li>
                
            </li>
            <?php
                $currentUserID = request()->route('userID');
                $currentAssignmentTableID = request()->route('assignmentTableID');
                $currentCourseID = request()->route('courseID');

               

                $assignedCoursesNav = \App\Models\StudentByCourse::where('student_id', Auth::id())
                        ->get();
                                        
            ?>

            <?php if($assignedCoursesNav->isEmpty()): ?>

            <?php else: ?>
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-white pl-5">Enrolled</div>
                    </div>
                    <hr class="border-white w-full">
                </li>
                <ul class="flex flex-col py-1 space-y-1 text-gray-800">
                    <?php
                        // Step 1: Count the occurrences of each course code
                        $courseCounts = [];
                        foreach($assignedCoursesNav as $courseAssignment) {
                            $courseCode = $courseAssignment->courseAssignment->id;
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

                    ?>

                    <?php $__currentLoopData = $assignedCoursesNav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courseAssignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $isActive = $currentAssignmentTableID == $courseAssignment->courseAssignment->id;
                        ?>
                        <li class="">
                            <a  href="<?php echo e(route('student.student.index', ['userID' => auth()->user()->id, 'assignmentTableID' => $courseAssignment->courseAssignment->id, 'courseID' => $courseAssignment->course->id])); ?>" class="<?php echo e($isActive ? 'rounded-e-3xl border-l-green-500 text-red-500 bg-slate-700  dark:text-gray-200' : ''); ?> relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl mt-1 hover:bg-blue-800 dark:hover:bg-slate-700 text-white hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 "
                                data-tippy-content="<?php echo e($teacher_details->name); ?> - <?php echo e($courseAssignment->course->course_name); ?><br><?php echo e($courseAssignment->days_of_the_week); ?> <?php echo e(date('g:i A', strtotime($courseAssignment->courseAssignment->class_start_time))); ?> - <?php echo e(date('g:i A', strtotime($courseAssignment->courseAssignment->class_end_time))); ?> | <?php echo e($courseAssignment->courseAssignment->section); ?>">

                                    <span class="inline-flex justify-center items-center ml-4 <?php echo e(isset($colorMap[$courseAssignment->courseAssignment->id]) ? $colorMap[$courseAssignment->courseAssignment->id] : 'text-white'); ?>">
                                        <?php if(isset($iconMap[$courseAssignment->courseAssignment->id])): ?>
                                            <i class="fa-solid <?php echo e($iconMap[$courseAssignment->courseAssignment->id]); ?>"></i>
                                        <?php endif; ?>
                                    </span>
                                    <!-- for sm -->
                                    <span class="ml-2 text-sm tracking-wide truncate sm:hidden ">
                                        <ul>
                                            <li><span class="text-white"><?php echo e($courseAssignment->course->course_code); ?> - <?php echo e($courseAssignment->course->course_name); ?></span></li>
                                            <li class="text-xs"><?php echo e($courseAssignment->courseAssignment->days_of_the_week); ?> <?php echo e(date('g:i A', strtotime($courseAssignment->courseAssignment->class_start_time))); ?> - <?php echo e(date('g:i A', strtotime($courseAssignment->courseAssignment->class_end_time))); ?> | <?php echo e($courseAssignment->courseAssignment->section); ?></li>
                                        </ul>
                                        
                                    </span>
                                    <!-- for md -->
                                    <span class="ml-2 text-sm tracking-wide truncate hidden sm:inline-block">
                                        <ul>
                                            <li><?php echo e($courseAssignment->course->course_code); ?> - <?php echo e($courseAssignment->course->course_name); ?></li>
                                            <li class="text-xs"><?php echo e($courseAssignment->courseAssignment->days_of_the_week); ?> <?php echo e(date('g:i A', strtotime($courseAssignment->courseAssignment->class_start_time))); ?> - <?php echo e(date('g:i A', strtotime($courseAssignment->courseAssignment->class_end_time))); ?> | <?php echo e($courseAssignment->courseAssignment->section); ?></li>
                                        </ul>
                                    </span>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
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

</script><?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/student/layouts/side-bar-navigation.blade.php ENDPATH**/ ?>