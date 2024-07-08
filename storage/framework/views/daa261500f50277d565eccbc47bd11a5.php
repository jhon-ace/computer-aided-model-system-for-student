<?php
    $teacher_details = Auth::user();
    $courseData = [
        'labels' => ['1ST', '2ND'], // School years
        'data' => [
            \Illuminate\Support\Facades\DB::table('course_assignments')->where('teacher_id', $teacher_details->id)->count('course_id'),
            0, // Placeholder for future data
            0, // Placeholder for future data
            0  // Placeholder for future data
        ]
    ];
?>
<?php if (isset($component)) { $__componentOriginalcc67118e210132cf50b1c183d70505e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc67118e210132cf50b1c183d70505e3 = $attributes; } ?>
<?php $component = App\View\Components\StudentAppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('student-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StudentAppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal8a863ae962bbf3c4907cbf5446e54179 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a863ae962bbf3c4907cbf5446e54179 = $attributes; } ?>
<?php $component = App\View\Components\UserRoutePageName::resolve(['routeName' => 'student.dashboard'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php if (isset($component)) { $__componentOriginal7fdc4497c56b05cf19ce7214a31530f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7fdc4497c56b05cf19ce7214a31530f3 = $attributes; } ?>
<?php $component = App\View\Components\Teacher\sectionDivStyle::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('teacher.section-div-style'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Teacher\sectionDivStyle::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="container mx-auto p-4 uppercase -mb-8">
            <p class="mb-2 xl:text-3xl text-black font-bold">Welcome, <span class="text-red-500"><?php echo e(Auth::user()->name); ?></span>!</p>
            <div class="border-t border-gray-600"></div>
        </div>

        
        

        <div class="flex flex-wrap gap- 4 mt-2">
            <!-- Repeat this card for each class -->
            <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                        </div>
                        <div class="ml-4">
                            <div class="text-lg font-semibold text-gray-800">Class Title</div>
                            <div class="text-sm text-gray-600">Teacher's Name</div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-700">Description of the class. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                        </div>
                        <div>
                            <a href="#" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                        </div>
                        <div class="ml-4">
                            <div class="text-lg font-semibold text-gray-800">Class Title</div>
                            <div class="text-sm text-gray-600">Teacher's Name</div>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-700">Description of the class. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                        </div>
                        <div>
                            <a href="#" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of card -->

            <button class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-base shadow-md">
            Add Class Code
        </button>
        </div>
        

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7fdc4497c56b05cf19ce7214a31530f3)): ?>
<?php $attributes = $__attributesOriginal7fdc4497c56b05cf19ce7214a31530f3; ?>
<?php unset($__attributesOriginal7fdc4497c56b05cf19ce7214a31530f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7fdc4497c56b05cf19ce7214a31530f3)): ?>
<?php $component = $__componentOriginal7fdc4497c56b05cf19ce7214a31530f3; ?>
<?php unset($__componentOriginal7fdc4497c56b05cf19ce7214a31530f3); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc67118e210132cf50b1c183d70505e3)): ?>
<?php $attributes = $__attributesOriginalcc67118e210132cf50b1c183d70505e3; ?>
<?php unset($__attributesOriginalcc67118e210132cf50b1c183d70505e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc67118e210132cf50b1c183d70505e3)): ?>
<?php $component = $__componentOriginalcc67118e210132cf50b1c183d70505e3; ?>
<?php unset($__componentOriginalcc67118e210132cf50b1c183d70505e3); ?>
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('coursesChart').getContext('2d');
        var coursesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($courseData['labels'], 15, 512) ?>, // Convert PHP array to JSON
                datasets: [{
                    label: 'Courses',
                    data: <?php echo json_encode($courseData['data'], 15, 512) ?>, // Convert PHP array to JSON
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.5
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Semester',
                            font: {
                                size: 16
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Courses Enrolled', // Change the label here
                            font: {
                                size: 16
                            }
                        }
                    }
                }
            }
        });
    });
</script>
<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/student/dashboard.blade.php ENDPATH**/ ?>