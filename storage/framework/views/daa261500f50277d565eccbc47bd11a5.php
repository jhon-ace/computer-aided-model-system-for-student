<?php
    $user = Auth::user();
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
            <p class="mb-2 xl:text-3xl text-black font-bold">Welcome, <span class="text-red-500"><?php echo e($user->name); ?></span>!</p>
            <div class="border-t border-gray-600"></div>
        </div>

        <div class="flex flex-wrap gap-4 mt-2">
            <!-- Repeat this card for each class -->
            <?php $__currentLoopData = $courseAssignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courseAssignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($courseAssignment->teacher_id === $teacher->id): ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                            <div class="flex items-center mb-4">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                                </div>
                                <div class="ml-4">
                                    <div class="text-lg font-semibold text-gray-800"><?php echo e($courseAssignment->course->course_name); ?></div>
                                    <div class="text-sm text-gray-600"><?php echo e($teacher->name); ?></div>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <p class="text-gray-700"><?php echo e($courseAssignment->course->course_description); ?></p>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <div>
                                    <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                                </div>
                                <div>
                                    <a href="<?php echo e(route('courses.show', $courseAssignment->course->id)); ?>" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- End of card -->

            <div id="inviteCodeModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 opacity-0 pointer-events-none transition-opacity duration-500">
                <div class="bg-white rounded-lg p-6 max-w-md mx-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold text-black">Join Class</h3>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-800">
                            <i class="fa-solid fa-times"></i>
                        </button>
                    </div>
                    <label for="course_code" class="block text-gray-700 text-md font-bold mb-2">Class Code:</label>
                    <input type="text" name="course_code" id="course_code" value="<?php echo e(old('course_code')); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['course_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autofocus>
                    <button id="closeModalBottom" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">
                       Join
                    </button>
                </div>
            </div>
            <button id="openModal" class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-base shadow-md">
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

    document.addEventListener('DOMContentLoaded', function () {
        const openModalButton = document.getElementById('openModal');
        const closeModalButtons = document.querySelectorAll('#closeModal, #closeModalBottom');
        const modal = document.getElementById('inviteCodeModal');

        openModalButton.addEventListener('click', function () {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
        });

        closeModalButtons.forEach(button => {
            button.addEventListener('click', function () {
                modal.classList.remove('opacity-100', 'pointer-events-auto');
                modal.classList.add('opacity-0', 'pointer-events-none');
            });
        });
    });
</script>
<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/student/dashboard.blade.php ENDPATH**/ ?>