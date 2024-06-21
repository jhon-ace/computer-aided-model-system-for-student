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
        <div class="font-bold text-md tracking-tight text-black mt-2 uppercase">List of Courses</div>
        <div class="flex justify-center sm:justify-end w-full sm:w-auto">
            <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
        </div>
    </div>
    <div class="overflow-x-auto">
        <!--[if BLOCK]><![endif]--><?php if($search && $assignedCourses->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No course found for matching "<?php echo e($search); ?>"</p>
        <?php elseif(!$search && $assignedCourses->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No assigned course yet</p>
        <?php else: ?>
            <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-2">
                <thead class="bg-gray-200 text-black">
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
                        <th class="cursor-pointer px-4 py-2 border border-gray-400">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $assignedCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignedCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
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
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->days_of_the_week); ?> | <?php echo e($assignedCourse->class_start_time); ?> - <?php echo e($assignedCourse->class_end_time); ?></td>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->room); ?></td>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>

            <div class="flex justify-between">
                <div class="text-black mt-2">Total Course: 
                    <span class="text-red-500">
                        <?php echo e($teacher->courseTotal); ?>

                    </span>
                </div>
                <div class="text-black mt-2">Total Units Acquired: 
                    <span class="text-red-500">
                        <?php echo e($teacher->totalUnits); ?>

                    </span>
                </div>
            </div>
            <?php echo e($assignedCourses->links()); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
 //S

</script>

<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/livewire/teacher/course-show-table.blade.php ENDPATH**/ ?>