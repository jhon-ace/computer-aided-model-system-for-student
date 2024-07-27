
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['toggleButtonId', 'sidebarContainerId1', 'dashboardContentId', 'toggleIconId']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['toggleButtonId', 'sidebarContainerId1', 'dashboardContentId', 'toggleIconId']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('<?php echo e($toggleButtonId); ?>');
        const sidebarContainer = document.getElementById('<?php echo e($sidebarContainerId1); ?>');
        const dashboardContent = document.getElementById('<?php echo e($dashboardContentId); ?>');
        const toggleIcon = document.getElementById('<?php echo e($toggleIconId); ?>');

        toggleButton.addEventListener('click', function() {
            sidebarContainer.classList.toggle('hidden'); // Toggle the 'hidden' class on the sidebar container
            if (sidebarContainer.classList.contains('hidden')) {
                // If sidebar is hidden, adjust dashboard content margin
                dashboardContent.classList.remove('ml-14', 'md:ml-48');
                toggleIcon.classList.remove('fa-solid', 'fa-bars');
                toggleIcon.classList.add('fa-solid', 'fa-bars');
            } else {
                // If sidebar is shown, apply appropriate margin
                dashboardContent.classList.add('ml-14', 'md:ml-48');
                toggleIcon.classList.remove('fa-solid', 'fa-bars');
                toggleIcon.classList.add('fa-solid', 'fa-bars');
            }
        });
    });
</script><?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/components/show-hide-sidebar-copy.blade.php ENDPATH**/ ?>