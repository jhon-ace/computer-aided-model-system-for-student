<div id="sidebarContainer" class="fixed flex flex-col left-0 w-14 hover:w-48 md:w-48 bg-gray-900 h-full text-black transition-all duration-300 border-r-2 border-gray-300 dark:border-gray-600 z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow mr-0.5">
        <ul class="flex flex-col py-2 space-y-1 text-gray-800" >
            <a href="#" class="flex justify-center mt-5 mb-5">
                <?php if(Auth::user()->teacher_photo && Storage::exists('public/teacher_photos/' . Auth::user()->teacher_photo)): ?>
                    <img src="<?php echo e(asset('storage/teacher_photos/' . Auth::user()->teacher_photo)); ?>" class=" rounded-full  w-28 h-auto object-contain">
                <?php else: ?>
                    <img id="imagePreview" src="<?php echo e(asset('assets/img/user.png')); ?>" class="rounded-lg w-9 h-9">
                <?php endif; ?>
            </a>
            <label class="relative flex flex-row justify-center items-center h-2  focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent  pr-3 ">
                <span class=" text-sm tracking-wide truncate text-white"><?php echo e($teacher_details->name); ?></span>
            </label>
            <label class="relative flex flex-row justify-center h-6 focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent   ">
                <span class=" text-xs tracking-wide truncate text-white"><?php echo e($teacher_details->email); ?></span>
            </label>
            <div class="border-t"></div>
            <li>
            <a href="<?php echo e(route('teacher.dashboard')); ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl mt-1 hover:bg-blue-800 dark:hover:bg-slate-700 text-slate-700 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 <?php echo e(request()->routeIs('teacher.dashboard') ? ' rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : 'hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white'); ?>">
                <span class="inline-flex justify-center items-center ml-4">
                    <i class="fa-solid fa-gauge-high fa-lg text-white" style="color: #fffff;"></i>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate text-white">Dashboard</span>
                </a>
            </li>
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-white uppercase">Manage</div>
                </div>
            </li>
            <li>
                <a  href="<?php echo e(route('teacher.teacher-courses.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('teacher.teacher-courses.index') || request()->routeIs('admin.department.edit') || request()->routeIs('admin.department.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">My Courses</span>
                </a>
            </li>
        </ul>
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs text-white">Copyright @2024</p>
    </div>
</div>
<!-- end of teacher navigation -->
<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/teacher/layouts/side-bar-navigation.blade.php ENDPATH**/ ?>