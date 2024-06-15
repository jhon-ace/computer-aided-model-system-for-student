<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium">
    <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
        <?php if (isset($component)) { $__componentOriginal83b61c532daa5db35e4d5f278370541a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal83b61c532daa5db35e4d5f278370541a = $attributes; } ?>
<?php $component = App\View\Components\SuccessMessage::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('success-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SuccessMessage::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(session('success')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal83b61c532daa5db35e4d5f278370541a)): ?>
<?php $attributes = $__attributesOriginal83b61c532daa5db35e4d5f278370541a; ?>
<?php unset($__attributesOriginal83b61c532daa5db35e4d5f278370541a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83b61c532daa5db35e4d5f278370541a)): ?>
<?php $component = $__componentOriginal83b61c532daa5db35e4d5f278370541a; ?>
<?php unset($__componentOriginal83b61c532daa5db35e4d5f278370541a); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session('info')): ?>
        <?php if (isset($component)) { $__componentOriginal5b0ec718b2a52eb7f1d359eaf540f08e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b0ec718b2a52eb7f1d359eaf540f08e = $attributes; } ?>
<?php $component = App\View\Components\InfoMessage::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InfoMessage::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(session('info')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b0ec718b2a52eb7f1d359eaf540f08e)): ?>
<?php $attributes = $__attributesOriginal5b0ec718b2a52eb7f1d359eaf540f08e; ?>
<?php unset($__attributesOriginal5b0ec718b2a52eb7f1d359eaf540f08e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b0ec718b2a52eb7f1d359eaf540f08e)): ?>
<?php $component = $__componentOriginal5b0ec718b2a52eb7f1d359eaf540f08e; ?>
<?php unset($__componentOriginal5b0ec718b2a52eb7f1d359eaf540f08e); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(session('error')): ?>
        <?php if (isset($component)) { $__componentOriginal6646e1f38de3f8fb9e19e80933243e87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6646e1f38de3f8fb9e19e80933243e87 = $attributes; } ?>
<?php $component = App\View\Components\ErrorMessage::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ErrorMessage::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(session('error')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6646e1f38de3f8fb9e19e80933243e87)): ?>
<?php $attributes = $__attributesOriginal6646e1f38de3f8fb9e19e80933243e87; ?>
<?php unset($__attributesOriginal6646e1f38de3f8fb9e19e80933243e87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6646e1f38de3f8fb9e19e80933243e87)): ?>
<?php $component = $__componentOriginal6646e1f38de3f8fb9e19e80933243e87; ?>
<?php unset($__componentOriginal6646e1f38de3f8fb9e19e80933243e87); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="flex justify-between mb-4">
        <a href="<?php echo e(route('admin.teacher.create')); ?>">
            <button class="bg-blue-500 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">
                <i class="fa-solid fa-plus fa-md" style="color: #ffffff;"></i> Add
            </button>
        </a>
        <div class="flex justify-center sm:justify-end w-full sm:w-auto">
            <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
        </div>
    </div>
    <div class="overflow-x-auto">
        <!--[if BLOCK]><![endif]--><?php if($teachers->isEmpty()): ?>
            <p class="text-black mt-10 text-center">No teacher found for matching "<?php echo e($search); ?>"</p>
        <?php else: ?>
                <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2"><input type="checkbox" id="selectAll"></th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('teacher_photo')" class="w-full h-full flex items-center justify-center">
                                    Photo
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'teacher_photo'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('name')" class="w-full h-full flex items-center justify-center">
                                    Teacher Name
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'name'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('email')" class="w-full h-full flex items-center justify-center">
                                    Faculty Email
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'email'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('department_id')" class="w-full h-full flex items-center justify-center">
                                    Department
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'department_id'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('status')" class="w-full h-full flex items-center justify-center">
                                    Status
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'status'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <form id="deleteSelectedForm" action="<?php echo e(route('admin.teacher.deleteSelected')); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete the selected faculty?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input type="hidden" wire:model="deleteAllClicked" value="true">
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-black border border-gray-400 px-4 py-2"><input type="checkbox" name="selected[]" value="<?php echo e($teacher->id); ?>"></td>
                                    <td class="text-black border border-gray-400 px-4 py-2 flex  items-center justify-center">
                                        <!--[if BLOCK]><![endif]--><?php if($teacher->teacher_photo && Storage::exists('public/teacher_photos/' . $teacher->teacher_photo)): ?>
                                            <img src="<?php echo e(asset('storage/teacher_photos/' . $teacher->teacher_photo)); ?>" class="rounded-full w-9 h-9">
                                        <?php else: ?>
                                            <img id="imagePreview" src="<?php echo e(asset('assets/img/user.png')); ?>" class="rounded-lg w-9 h-9">
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                    </td>

                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($teacher->name); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($teacher->email); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($teacher->department->department_name); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($teacher->status); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2">
                                        <div class="flex justify-center items-center space-x-2">
                                            <a href="<?php echo e(route('admin.teacher.edit', $teacher->id)); ?>" class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-red-500">
                                                <i class="fas fa-edit fa-md"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>       
                </table>
                    <button type="submit" class="bg-red-500 text-white text-sm px-4 py-2 rounded hover:bg-red-700 mb-2">Delete Selected</button>
                </form>
            <?php echo e($teachers->links()); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

<script>
    document.getElementById('selectAll').addEventListener('change', function(e) {
        const checkboxes = document.querySelectorAll('input[name="selected[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
    });
</script>
<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/livewire/teacher-show-table.blade.php ENDPATH**/ ?>