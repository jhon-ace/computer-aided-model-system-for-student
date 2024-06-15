<!-- resources/views/components/alert-modal.blade.php -->
<div x-data="{ show: <?php echo json_encode(session('success') ? true : false, 15, 512) ?> }" 
     x-show="show" 
     x-transition:enter="transition ease-out duration-300" 
     x-transition:enter-start="opacity-0 transform scale-90" 
     x-transition:enter-end="opacity-100 transform scale-100" 
     x-transition:leave="transition ease-in duration-200" 
     x-transition:leave-start="opacity-100 transform scale-100" 
     x-transition:leave-end="opacity-0 transform scale-90" 
     @keydown.escape.window="show = false" 
     class="fixed inset-0 z-50 flex items-center justify-center">

    <div class="fixed inset-0 bg-gray-800 opacity-75"></div>
    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-lg">
        <div class="bg-green-500 text-white px-4 py-3 flex justify-between items-center">
            <span class="text-lg font-semibold">Success</span>
            <button @click="show = false" class="text-white hover:text-gray-200">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4">
            <?php echo e($slot); ?>

        </div>
        <div class="flex justify-end p-2">
            <button @click="show = false" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Close</button>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/components/alert-modal.blade.php ENDPATH**/ ?>