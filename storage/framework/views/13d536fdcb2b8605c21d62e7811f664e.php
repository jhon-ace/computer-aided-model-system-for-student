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
<?php $component = App\View\Components\UserRoutePageName::resolve(['routeName' => 'teacher.classwork.index','courseDetails' => [
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
<?php endif; ?><?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/teacher/classwork/index.blade.php ENDPATH**/ ?>