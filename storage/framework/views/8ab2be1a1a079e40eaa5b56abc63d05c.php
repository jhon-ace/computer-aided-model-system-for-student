<div id="capsLockWarning" class="text-red-500"></div>

<?php if (! $__env->hasRenderedOnce('08cc7edf-18ab-4c47-8b38-3f45aa2dd782')): $__env->markAsRenderedOnce('08cc7edf-18ab-4c47-8b38-3f45aa2dd782'); ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const inputFields = document.querySelectorAll("input[type='text']");
                inputFields.forEach(function(input) {
                    input.addEventListener("keyup", function(event) {
                        const capsLockActive = event.getModifierState && event.getModifierState("CapsLock");
                        const warningElement = document.getElementById("capsLockWarning");
                        if (capsLockActive) {
                            warningElement.textContent = "Caps Lock is ON";
                        } else {
                            warningElement.textContent = "";
                        }
                    });
                });
            });
        </script>
    <?php endif; ?>
<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/components/capslock-detector.blade.php ENDPATH**/ ?>