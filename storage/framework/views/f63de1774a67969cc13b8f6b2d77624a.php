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
<?php $component = App\View\Components\UserRoutePageName::resolve(['routeName' => 'admin.dashboard'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <div class="container mx-auto p-4 uppercase -mb-8">
                    <p class="mb-2 xl:text-3xl text-black font-bold">Welcome admin, <?php echo e(Auth::user()->name); ?> !</p>
                    <div class="  border-t border-gray-600">
                    </div>
                </div>
                <!--  sm:px-10 md:px-12 lg:px-10 xl:px-10 -->
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4 ">
                    <a href="<?php echo e(route('admin.department.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94 = $attributes; } ?>
<?php $component = App\View\Components\CardDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CardDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                            </div>
                            <div class="text-right">
                            <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('departments')->count('id')); ?></p>
                                <p>Departments</p>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $attributes = $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $component = $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('admin.dean.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94 = $attributes; } ?>
<?php $component = App\View\Components\CardDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CardDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('deans')->count('id')); ?></p>
                                <p>Deans</p>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $attributes = $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $component = $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('admin.program.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94 = $attributes; } ?>
<?php $component = App\View\Components\CardDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CardDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('programs')->count('id')); ?></p>
                                <p>Programs</p>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $attributes = $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $component = $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('admin.course.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94 = $attributes; } ?>
<?php $component = App\View\Components\CardDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CardDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('courses')->count('id')); ?></p>
                                <p>Courses</p>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $attributes = $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $component = $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('admin.teacher.index')); ?>">
                        <?php if (isset($component)) { $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94 = $attributes; } ?>
<?php $component = App\View\Components\CardDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CardDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('teachers')->count('id')); ?></p>
                                <p>Teachers</p>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $attributes = $__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__attributesOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94)): ?>
<?php $component = $__componentOriginal1c0ee2231973af4fd245f8c4e6991f94; ?>
<?php unset($__componentOriginal1c0ee2231973af4fd245f8c4e6991f94); ?>
<?php endif; ?>
                    </a>
                </div>
                <div class="container mx-auto mt-2 p-4">
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-2xl font-bold mb-4">Student Enrollees</h2>
                        <canvas id="enrolleesChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div> 
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
<?php endif; ?>

<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>