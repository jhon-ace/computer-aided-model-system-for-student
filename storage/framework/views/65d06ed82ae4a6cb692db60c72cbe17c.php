<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
    <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
        <?php if (isset($component)) { $__componentOriginal54e362747f6a5fcdcf7fd32363698818 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54e362747f6a5fcdcf7fd32363698818 = $attributes; } ?>
<?php $component = App\View\Components\Sweetalert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sweetalert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sweetalert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('success'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $attributes = $__attributesOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $component = $__componentOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__componentOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session('info')): ?>
        <?php if (isset($component)) { $__componentOriginal54e362747f6a5fcdcf7fd32363698818 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54e362747f6a5fcdcf7fd32363698818 = $attributes; } ?>
<?php $component = App\View\Components\Sweetalert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sweetalert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sweetalert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('info'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $attributes = $__attributesOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $component = $__componentOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__componentOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session('error')): ?>
        <?php if (isset($component)) { $__componentOriginal54e362747f6a5fcdcf7fd32363698818 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54e362747f6a5fcdcf7fd32363698818 = $attributes; } ?>
<?php $component = App\View\Components\Sweetalert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sweetalert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sweetalert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('error'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $attributes = $__attributesOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $component = $__componentOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__componentOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="flex justify-between mb-4">
        <!--[if BLOCK]><![endif]--><?php if(!$assignedCourses->isEmpty()): ?>
            <div class="font-bold text-md tracking-tight text-black mt-2">My Courses</div>
            <div class="flex justify-center sm:justify-end w-full sm:w-auto">
                <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
            </div>
        <?php elseif($search && $assignedCourses->isEmpty()): ?>
            <div class="font-bold text-md tracking-tight text-black mt-2">My Courses</div>
            <div class="flex justify-center sm:justify-end w-full sm:w-auto">
                <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
            </div>
        <?php else: ?>
        
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="overflow-x-auto">
        <!--[if BLOCK]><![endif]--><?php if($search && $assignedCourses->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No course found for matching "<?php echo e($search); ?>"</p>
        <?php elseif(!$search && $assignedCourses->isEmpty()): ?>
            <p class="text-black text-center text-lg">You have no courses assigned yet</p>
        <?php else: ?>
            <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-1">
                <thead class="bg-gray-200 text-black">
                    <tr>
                        <th colspan="6"><small>(click the column name to sort)</small></th>
                    </tr>
                    <tr>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('courses.course_code')">
                                Course Code
                                <!--[if BLOCK]><![endif]--><?php if($sortField == 'courses.course_code'): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    <?php else: ?>
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('courses.course_name')">
                                Course Description
                                <!--[if BLOCK]><![endif]--><?php if($sortField == 'courses.course_name'): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    <?php else: ?>
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('section')">
                                Section
                                <!--[if BLOCK]><![endif]--><?php if($sortField == 'section'): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    <?php else: ?>
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400 " wire:click="sortBy('courses.course_unit')">
                                Unit/s
                                <!--[if BLOCK]><![endif]--><?php if($sortField == 'courses.course_unit'): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    <?php else: ?>
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400" wire:click="sortBy('days_of_the_week')">
                                Schedule
                                <!--[if BLOCK]><![endif]--><?php if($sortField == 'days_of_the_week'): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    <?php else: ?>
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </th>
                        <th class="cursor-pointer px-4 py-2 border border-gray-400" wire:click="sortBy('room')">
                                Room
                                <!--[if BLOCK]><![endif]--><?php if($sortField == 'room'): ?>
                                    <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                        &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                    <?php else: ?>
                                        &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $assignedCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignedCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-200 cursor-pointer"
                    onclick="window.location='<?php echo e(route('teacher.teacher.index', ['userID' => auth()->user()->id, 'assignmentTableID' => $assignedCourse->id, 'courseID' => $assignedCourse->course_id])); ?>'">
                        <!--[if BLOCK]><![endif]--><?php if($assignedCourse->course): ?>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->course->course_code); ?></td>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->course->course_name); ?></td>
                        <?php else: ?>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->section); ?></td>
                        <!--[if BLOCK]><![endif]--><?php if($assignedCourse->course): ?>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->course->course_unit); ?></td>
                        <?php else: ?>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->days_of_the_week); ?> | <?php echo e(date('g:i A', strtotime($assignedCourse->class_start_time))); ?> - <?php echo e(date('g:i A', strtotime($assignedCourse->class_end_time))); ?></td>
                        <td class="room-cell text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->room); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
            <div id="tooltip" class="custom-tooltip"></div>
            <?php echo e($assignedCourses->links()); ?><br>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="flex justify-between">
        <div class="mt-1">
            <span class="text-red-500">Note: </span>Select the course to manage.
        </div>
        <div class="flex justify-start">
            <div class="text-black mt-1">Courses: 
                <span class="text-red-500">
                    <?php echo e($teacher->courseTotal); ?>

                </span> | &nbsp;
            </div>
            <div class="text-black mt-1">Total Units: 
                <span class="text-red-500">
                    <?php echo e($teacher->totalUnits); ?>

                </span>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/livewire/teacher/course-show-table.blade.php ENDPATH**/ ?>