<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
        <!--[if BLOCK]><![endif]--><?php if($search && $courses_assign->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No course found for matching "<?php echo e($search); ?>"</p>
        <?php elseif(!$search && $courses_assign->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No data available in table</p>
        <?php else: ?>
        <table class="w-full text-center mb-4 ">
                    <thead class=" text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_id')" class="w-full h-full flex items-center justify-center">
                                    Course
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_id'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('section')" class="w-full h-full flex items-center justify-center">
                                    Section Name
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'section'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_description')" class="w-full h-full flex items-center justify-center">
                                    Schedule
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_description'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $courses_assign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course_assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course_assign->course->course_code); ?> - <?php echo e($course_assign->course->course_name); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course_assign->section); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2">
                                    <?php echo e($course_assign->days_of_the_week); ?> | 
                                    <?php echo e(date('h:i A', strtotime($course_assign->class_start_time))); ?> - 
                                    <?php echo e(date('h:i A', strtotime($course_assign->class_end_time))); ?>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div><?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/livewire/course-assign-show-table.blade.php ENDPATH**/ ?>