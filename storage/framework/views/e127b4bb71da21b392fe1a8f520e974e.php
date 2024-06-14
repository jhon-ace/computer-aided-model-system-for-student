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
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-neutral-300 text-black dark:text-white">
        <div class="h-full ml-14 mb-10 md:ml-48 ">
            <div class="max-w-full mx-auto  mt-10 sm:px-10 md:px-12 lg:px-10 xl:px-10 ">
                <div class="text-gray-700 ml-5 text-md">Admin / Dashboard</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                        <a href="<?php echo e(route('admin.department.index')); ?>">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                                </div>
                                <div class="text-right">
                                <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('departments')->count('id')); ?></p>
                                    <p>Departments</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo e(route('admin.dean.index')); ?>">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('deans')->count('id')); ?></p>
                                    <p>Deans</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo e(route('admin.program.index')); ?>">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('programs')->count('id')); ?></p>
                                    <p>Programs</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo e(route('admin.course.index')); ?>">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('courses')->count('id')); ?></p>
                                    <p>Courses</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo e(route('admin.faculty.index')); ?>">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('faculty')->count('id')); ?></p>
                                    <p>Faculty</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="container mx-auto mt-2 p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-4">Student Enrollees</h2>
                            <canvas id="enrolleesChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
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
<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>