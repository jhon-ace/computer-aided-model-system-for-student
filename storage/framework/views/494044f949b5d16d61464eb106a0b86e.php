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
<?php $component = App\View\Components\UserRoutePageName::resolve(['routeName' => 'teacher.teacher.index','courseDetails' => [
            'course_name' => $manageCourse->course->course_name,
            'time' => date('g:i A', strtotime($manageCourse->class_start_time)) . ' - ' . date('g:i A', strtotime($manageCourse->class_end_time)),
            'days_of_the_week' => $manageCourse->days_of_the_week,
            'section' => $manageCourse->section,
        ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <div class="container mx-auto p-4 relative"> <!-- Added relative positioning -->
            <div class="rounded-md p-3 sm:p-4 md:p-6 lg:p-2 w-full h-18 sm:h-20 md:h-28 lg:h-24 lg:pt-4  mb-4 truncate" style="background: linear-gradient(to right, #3b82f6, #1e40af);">
                <div class="flex justify-between">
                    <span class="text-lg sm:text-sm md:text-2xl lg:text-3xl lg:ml-3 font-bold">
                        <?php echo e($manageCourse->course->course_code); ?> - <?php echo e($manageCourse->course->course_name); ?>

                    </span>
                    <span class="mr-5 text-lg sm:text-sm md:text-2xl lg:text-xl lg:ml-3 font-bold relative">
                        <i id="settingsIcon" class="fa-solid fa-cog cursor-pointer"></i>
                    </span>
                </div>
                <span class="text-sm sm:text-md md:text-lg lg:text-xl lg:ml-3">
                    <?php echo e($manageCourse->section); ?> | <?php echo e(date('g:i A', strtotime($manageCourse->class_start_time))); ?> - <?php echo e(date('g:i A', strtotime($manageCourse->class_end_time))); ?> <?php echo e($manageCourse->days_of_the_week); ?>

                </span>
            </div>
            <div id="floatingMenu1" class="fixed right-10 top-[160px] transform -translate-y-1/2 bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-3 border-2 border-gray-400 text-black font-medium opacity-0 pointer-events-none transition-all duration-500">
                <div class="text-center font-bold">Class</div>
                <hr class="border-gray-300">
                <a id="inviteCodeLink" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200  cursor-pointer">
                    <i class="fa-solid fa-file"></i> Invite Code
                </a>
            </div>
            <!-- Menu's -->
            <div id="floatingMenu" class="fixed right-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-3 border-2 border-gray-400 text-black font-medium opacity-0 pointer-events-none transition-all duration-500">
                <div class="text-center font-bold">View</div>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-file"></i> Classwork
                </a>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-users"></i> People
                </a>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-list-ol"></i> Scores
                </a>
                <hr class="border-gray-300">
                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                    <i class="fa-solid fa-file-pen"></i> Student
                </a>
            </div>
            <!-- Toggle Button for Adding of Components -->
            <div id="toggleButton2" class="fixed -right-1 top-1/2 transform -translate-y-1/2 z-50 bg-white text-gray-500 p-2 rounded-full shadow-md cursor-pointer">
                <svg id="toggleIcon2" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l7-7-4-4-7 7v4h4z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13l-6-6m6 6L13 6m0 0l-3 3"/>
                </svg>
            </div>

            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
                <div class="flex justify-start mb-4">
                    <div class="font-bold text-md tracking-tight text-black mt-2">My Courses</div>
                </div>
                <div class="overflow-x-auto">
                
            </div>

            <!-- MODAL -->
             <!-- Modal -->
            <div id="inviteCodeModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 opacity-0 pointer-events-none transition-opacity duration-500">
                <div class="bg-white rounded-lg p-6 max-w-md mx-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Invite Code</h3>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-800">
                            <i class="fa-solid fa-times"></i>
                        </button>
                    </div>
                    <p>Your invite code is: <strong>XYZ123</strong></p>
                    <button id="closeModalBottom" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Close
                    </button>
                </div>
            </div>
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
<?php if (isset($__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e)): ?>
<?php $attributes = $__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e; ?>
<?php unset($__attributesOriginalbf020ec425b6d0b9fddc69f3baf70e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e)): ?>
<?php $component = $__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e; ?>
<?php unset($__componentOriginalbf020ec425b6d0b9fddc69f3baf70e3e); ?>
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
    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.getElementById('toggleButton2');
        var menu = document.getElementById('floatingMenu');

        toggleButton.addEventListener('mouseover', function() {
            menu.classList.remove('opacity-0', 'pointer-events-none');
            menu.classList.add('opacity-100', 'pointer-events-auto');
            toggleButton.style.opacity = '0'; // Hide toggleButton when menu is shown
        });

        menu.addEventListener('mouseleave', function() {
            menu.classList.remove('opacity-100', 'pointer-events-auto');
            menu.classList.add('opacity-0', 'pointer-events-none');
            toggleButton.style.opacity = '1'; // Show toggleButton when menu is hidden
        });
    });
</script>

<style>
    #floatingMenu {
        transition: opacity 0.5s ease-in-out;
    }

    #toggleButton2 {
        transition: opacity 0.5s ease-in-out;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var settingsIcon = document.getElementById('settingsIcon');
        var menu = document.getElementById('floatingMenu1');
        var inviteCodeLink = document.getElementById('inviteCodeLink');
        var inviteCodeModal = document.getElementById('inviteCodeModal');
        var closeModalButtons = document.querySelectorAll('#closeModal, #closeModalBottom');

        settingsIcon.addEventListener('mouseover', function() {
            menu.classList.remove('opacity-0', 'pointer-events-none');
            menu.classList.add('opacity-100', 'pointer-events-auto');
        });

        menu.addEventListener('mouseleave', function() {
            menu.classList.remove('opacity-100', 'pointer-events-auto');
            menu.classList.add('opacity-0', 'pointer-events-none');
        });

        menu.addEventListener('mouseover', function() {
            menu.classList.remove('opacity-0', 'pointer-events-none');
            menu.classList.add('opacity-100', 'pointer-events-auto');
        });

        settingsIcon.addEventListener('mouseleave', function() {
            setTimeout(function() {
                if (!menu.matches(':hover')) {
                    menu.classList.remove('opacity-100', 'pointer-events-auto');
                    menu.classList.add('opacity-0', 'pointer-events-none');
                }
            }, 300);
        });
        inviteCodeLink.addEventListener('click', function(event) {
            event.preventDefault();
            inviteCodeModal.classList.remove('opacity-0', 'pointer-events-none');
            inviteCodeModal.classList.add('opacity-100', 'pointer-events-auto');
        });

        closeModalButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                inviteCodeModal.classList.remove('opacity-100', 'pointer-events-auto');
                inviteCodeModal.classList.add('opacity-0', 'pointer-events-none');
            });
        });
    });
</script>

<style>
    #floatingMenu2 {
        transition: opacity 0.5s ease-in-out;
    }

    .relative {
        position: relative;
    }
    #inviteCodeModal {
        transition: opacity 0.5s ease-in-out;
    }
</style>

<script>

document.addEventListener('DOMContentLoaded', function() {
    tippy('[data-tippy-content]', {
        allowHTML: true,
        theme: 'light', // Optional: Change the tooltip theme (light, dark, etc.)
        placement: 'right-end', // Optional: Adjust tooltip placement
    });
});

</script><?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/teacher/courses/manage-course/index.blade.php ENDPATH**/ ?>