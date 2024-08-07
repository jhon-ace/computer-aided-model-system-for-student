<!-- Include Alpine.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.14.0/cdn.min.js" defer></script>

<div class="transition-all duration-300 min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-zinc-300 text-black dark:text-white">
    <div id="dashboardContent" class="h-full ml-14 mb-5 md:ml-48 transition-all duration-300">
        <div class="max-w-full mx-auto">
            <div class="flex w-full p-2 bg-blue-600 justify-between">
                <div class="ml-2 mt-0.5 font-semibold text-xs text-white uppercase sm:text-sm md:text-md lg:text-md xl:text-md">
                    <button id="toggleButton" class="text-white mr-0 px-3 py-1 rounded-md border border-transparent hover:border-blue-500">
                        <i id="toggleIcon" class="fa-solid fa-bars" style="color: #ffffff;"></i>
                    </button>
                    Computer - Aided Instructional Module System
                </div>
                <div class="relative" x-data="{ open: false }">
                    <div @click="open = !open" class="mr-5 cursor-pointer">
                        <i class="fa-solid fa-user-gear px-3 py-2 rounded-md border border-transparent hover:border-blue-500" style="color: #ffffff;"></i>
                    </div>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20">
                        <a href="<?php echo e(route('admin.profile.edit')); ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                            <i class="fa-regular fa-user"></i> Profile
                        </a>
                        <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(route('admin.logout')); ?>"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <?php echo e($slot); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/components/section-div-style.blade.php ENDPATH**/ ?>