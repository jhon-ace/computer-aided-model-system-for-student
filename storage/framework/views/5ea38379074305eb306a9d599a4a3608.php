<?php if (isset($component)) { $__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07 = $attributes; } ?>
<?php $component = App\View\Components\AdminAppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminAppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal8a863ae962bbf3c4907cbf5446e54179 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a863ae962bbf3c4907cbf5446e54179 = $attributes; } ?>
<?php $component = App\View\Components\UserRoutePageName::resolve(['routeName' => 'admin.program.create'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('user-route-page-name'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\UserRoutePageName::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a863ae962bbf3c4907cbf5446e54179)): ?>
<?php $attributes = $__attributesOriginal8a863ae962bbf3c4907cbf5446e54179; ?>
<?php unset($__attributesOriginal8a863ae962bbf3c4907cbf5446e54179); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a863ae962bbf3c4907cbf5446e54179)): ?>
<?php $component = $__componentOriginal8a863ae962bbf3c4907cbf5446e54179; ?>
<?php unset($__componentOriginal8a863ae962bbf3c4907cbf5446e54179); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal94d9e35ace3d037c0de2b30cca670e84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94d9e35ace3d037c0de2b30cca670e84 = $attributes; } ?>
<?php $component = App\View\Components\SectionDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SectionDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="container mx-auto p-4">
            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium mx-auto">
                <div class="flex justify-between mb-4 sm:-mt-4">
                    <div class="font-bold text-md tracking-tight text-black  -ml-3 px-3 py-2">Admin / Add Program</div>
                    <a href="<?php echo e(route('admin.program.index')); ?>">
                        <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to list
                        </button>
                    </a>
                </div>
                <hr class="border-gray-200 my-4 ">    
                <form action="<?php echo e(route('admin.program.store')); ?>" method="POST" class="">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginal666513199e72eff8ee23d3757699cc04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal666513199e72eff8ee23d3757699cc04 = $attributes; } ?>
<?php $component = App\View\Components\CapsLockDetector::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('caps-lock-detector'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CapsLockDetector::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal666513199e72eff8ee23d3757699cc04)): ?>
<?php $attributes = $__attributesOriginal666513199e72eff8ee23d3757699cc04; ?>
<?php unset($__attributesOriginal666513199e72eff8ee23d3757699cc04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal666513199e72eff8ee23d3757699cc04)): ?>
<?php $component = $__componentOriginal666513199e72eff8ee23d3757699cc04; ?>
<?php unset($__componentOriginal666513199e72eff8ee23d3757699cc04); ?>
<?php endif; ?>
                    <div class="mt-4">
                        <label for="department_id" class="block text-gray-700 text-md font-bold mb-2">Assign Department:</label>
                        <select id="department_id" name="department_id" value="<?php echo e(old('department_id')); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['department_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                            <option value="" selected>Select Department</option>
                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('department_id'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('department_id')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-md font-bold mb-2">Program Abbreviation:</label>
                        <input type="text" name="program_abbreviation" id="name" value="<?php echo e(old('program_abbreviation')); ?>"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['program_abbreviation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autofocus>
                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('program_abbreviation'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('program_abbreviation')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                    </div>
                    <div class="mb-4">
                        <label for="program_description" class="block text-gray-700 text-md font-bold mb-2">Program Description:</label>
                        <input type="text" name="program_description" id="program_description" value="<?php echo e(old('program_description')); ?>"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['program_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('program_description'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('program_description')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                    </div>
                    <div class="mt-4">
                        <label for="status" class="block text-gray-700 text-md font-bold mb-2">Status:</label>
                        <select id="status" name="status" value="<?php echo e(old('status')); ?>"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="status">
                            <option value="" selected>Select status</option>
                            <option value="Offered">Offered</option>
                            <option value="Not yet offered">Not yet offered</option>
                        </select>
                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('status'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('status')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                    </div>
                    <div class="flex  mb-4 mt-5 justify-center">
                        <button type="submit" class="w-80 bg-blue-500 text-white px-4 py-2 rounded-md">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94d9e35ace3d037c0de2b30cca670e84)): ?>
<?php $attributes = $__attributesOriginal94d9e35ace3d037c0de2b30cca670e84; ?>
<?php unset($__attributesOriginal94d9e35ace3d037c0de2b30cca670e84); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94d9e35ace3d037c0de2b30cca670e84)): ?>
<?php $component = $__componentOriginal94d9e35ace3d037c0de2b30cca670e84; ?>
<?php unset($__componentOriginal94d9e35ace3d037c0de2b30cca670e84); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07)): ?>
<?php $attributes = $__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07; ?>
<?php unset($__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07)): ?>
<?php $component = $__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07; ?>
<?php unset($__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal7f83d574ebf694838d71081ed65bad7b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f83d574ebf694838d71081ed65bad7b = $attributes; } ?>
<?php $component = App\View\Components\ShowHideSidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('show-hide-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ShowHideSidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['toggleButtonId' => 'toggleButton','sidebarContainerId' => 'sidebarContainer','dashboardContentId' => 'dashboardContent','toggleIconId' => 'toggleIcon']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7f83d574ebf694838d71081ed65bad7b)): ?>
<?php $attributes = $__attributesOriginal7f83d574ebf694838d71081ed65bad7b; ?>
<?php unset($__attributesOriginal7f83d574ebf694838d71081ed65bad7b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f83d574ebf694838d71081ed65bad7b)): ?>
<?php $component = $__componentOriginal7f83d574ebf694838d71081ed65bad7b; ?>
<?php unset($__componentOriginal7f83d574ebf694838d71081ed65bad7b); ?>
<?php endif; ?><?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/admin/program/create.blade.php ENDPATH**/ ?>