
<div id="sidebarContainer" class="fixed flex flex-col left-0 w-14 hover:w-48 md:w-48 bg-gray-900 h-full text-black transition-all duration-300 border-r-2 border-gray-300 dark:border-gray-600 z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow mr-0.5">
        <ul class="flex flex-col py-2 space-y-1 text-gray-800" >
            <a href="#">
                <img class="w-auto h-auto object-contain" src="<?php echo e(asset('assets/img/user.png')); ?>" alt="SCMS Logo">
            </a>
            <label class="relative flex flex-row justify-center items-center h-2 focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent  pr-3 ">
                <span class=" text-sm tracking-wide truncate text-white"><?php echo e(Auth::user()->name); ?></span>
            </label>
            <label class="relative flex flex-row justify-center h-5 focus:outline-none   text-white-600 hover:text-white-800 border-l-4 border-transparent   ">
                <span class=" text-xs tracking-wide truncate text-white"><?php echo e(Auth::user()->email); ?></span>
            </label>
            <div class="border-t"></div>
            <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-slate-700 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 <?php echo e(request()->routeIs('admin.dashboard') ? ' rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : 'hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white'); ?>">
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
                <a  href="<?php echo e(route('admin.department.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('admin.department.index') || request()->routeIs('admin.department.edit') || request()->routeIs('admin.department.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Department</span>
                </a>
            </li>
            <li>
                <a  href="<?php echo e(route('admin.dean.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('admin.dean.index') || request()->routeIs('admin.dean.edit') || request()->routeIs('admin.dean.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Deans</span>
                </a>
            </li>

            <li>
                <a  href="<?php echo e(route('admin.program.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('admin.program.index') || request()->routeIs('admin.program.edit') || request()->routeIs('admin.program.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Programs</span>
                </a>
            </li>
            <li>
                <a  href="<?php echo e(route('admin.course.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('admin.course.index') || request()->routeIs('admin.course.edit') || request()->routeIs('admin.course.create') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Course</span>
                </a>
            </li>
            <li>
                <a  href="<?php echo e(route('admin.teacher.index')); ?>"  
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:rounded-e-3xl hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6
                        <?php echo e(request()->routeIs('admin.teacher.index') || request()->routeIs('admin.teacher.edit') || request()->routeIs('admin.teacher.create') 
                         || request()->routeIs('admin.teacher.assignCourse') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : ''); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-md text-white" style="color: #fffff;"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate text-white">Teachers</span>
                </a>
            </li>

            <!-- <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center mt-5 h-8">
                <div class="text-sm font-light tracking-wide text-gray-500 uppercase">Tools</div>
                </div>
            </li> -->
            
            
            <!-- <li>
              <a href="<?php echo e(route('admin.profile.edit')); ?>" class="relative flex flex-row items-center  hover:rounded-e-3xl h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-slate-700 text-slate-700 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6 <?php echo e(request()->routeIs('admin.profile.edit') ? 'rounded-e-3xl border-l-green-500 bg-slate-700 text-gray-700 dark:text-gray-200' : 'hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-green-500 hover:text-white'); ?>">
                    <span class="inline-flex justify-center items-center ml-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate"><?php echo e(__('Profile')); ?></span>
                </a>

            </li>
            <li>
                <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo e(route('admin.logout')); ?>"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-slate-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:rounded-e-3xl hover:border-blue-500 dark:hover:border-green-500 hover:text-white pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate"><?php echo e(__('Log Out')); ?></span>
                    </a>
                </form>
            </li> -->
        </ul>
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs text-white">Copyright @2024</p>
    </div>
</div>
<!-- end of admin navigation -->
<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/admin/layouts/side-bar-navigation.blade.php ENDPATH**/ ?>