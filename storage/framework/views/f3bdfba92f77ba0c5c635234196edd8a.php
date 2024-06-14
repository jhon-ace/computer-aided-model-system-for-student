<?php if (isset($component)) { $__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e = $attributes; } ?>
<?php $component = App\View\Components\TeacherAppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('teacher-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TeacherAppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($component)) { $__componentOriginal8a863ae962bbf3c4907cbf5446e54179 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a863ae962bbf3c4907cbf5446e54179 = $attributes; } ?>
<?php $component = App\View\Components\UserRoutePageName::resolve(['routeName' => 'teacher.dashboard'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <div class="text-gray-700 ml-5 text-md">Teacher / Dashboard</div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                                </div>
                                <div class="text-right">
                                <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('departments')->count('id')); ?></p>
                                    <p>My Courses</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl"><?php echo e(\Illuminate\Support\Facades\DB::table('departments')->count('id')); ?></p>
                                    <p>My Modules</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">
                                    
                                    <p>Deans</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-b-4 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">

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
<?php if (isset($__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e)): ?>
<?php $attributes = $__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e; ?>
<?php unset($__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e)): ?>
<?php $component = $__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e; ?>
<?php unset($__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/teacher/dashboard.blade.php ENDPATH**/ ?>