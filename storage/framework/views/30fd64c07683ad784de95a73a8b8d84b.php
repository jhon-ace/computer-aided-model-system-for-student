<div id="sidebarContainer" class="fixed flex flex-col left-0 w-[68px] hover:w-48 md:w-48 bg-gray-900 h-full text-black transition-all duration-300 border-r-2 border-gray-300 dark:border-gray-600 z-50 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow mr-0.5">
        <ul class="flex flex-col py-2 space-y-1 text-gray-800" >
            <a href="#" class="flex justify-center mt-5 mb-2">
                <img id="imagePreview" src="<?php echo e(asset('assets/img/logo.png')); ?>" class="rounded-lg w-24 h-auto object-contain">
            </a>
            <!-- <label class="relative flex flex-row justify-center items-center h-2  focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent  pr-3 ">
                <span class=" text-sm tracking-wide truncate text-white"><?php echo e($teacher_details->name); ?></span>
            </label>
            <label class="relative flex flex-row justify-center h-6 focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent   ">
                <span class=" text-xs tracking-wide truncate text-white"><?php echo e($teacher_details->email); ?></span>
            </label>
            <div class="border-t"></div> -->
            <li>
            <a href="<?php echo e(route('teacher.dashboard')); ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl mt-1 hover:bg-blue-800 dark:hover:bg-slate-700 text-slate-700 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 <?php echo e(request()->routeIs('teacher.dashboard') ? ' rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : 'hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white'); ?>">
                <span class="inline-flex justify-center items-center ml-4">
                    <i class="fa-solid fa-gauge-high fa-lg text-white" style="color: #fffff;"></i>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate text-white">My Dashboard</span>
                </a>
            </li>
            <li>
                <a  href="<?php echo e(route('teacher.teachercourses.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('teacher.teachercourses.index') || request()->routeIs('admin.department.edit') || request()->routeIs('admin.department.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-file fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Courses</span>
                </a>
            
                </ul>
            
        </ul>
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs text-white">Copyright @2024</p>
    </div>
</div>
<!-- end of teacher navigation -->

<script>

document.addEventListener('DOMContentLoaded', function() {
    tippy('[data-tippy-content]', {
        allowHTML: true,
        theme: 'light', // Optional: Change the tooltip theme (light, dark, etc.)
        placement: 'right-end', // Optional: Adjust tooltip placement
    });
});

</script><?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/student/layouts/side-bar-navigation.blade.php ENDPATH**/ ?>