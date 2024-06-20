<div id="capsLockWarning" class="text-red-500"></div>

<?php if (! $__env->hasRenderedOnce('f5521cd6-2ea9-4100-bc3b-d4f48ab20b6e')): $__env->markAsRenderedOnce('f5521cd6-2ea9-4100-bc3b-d4f48ab20b6e'); ?>
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