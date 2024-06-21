<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
    <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
        <?php if (isset($component)) { $__componentOriginal54e362747f6a5fcdcf7fd32363698818 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54e362747f6a5fcdcf7fd32363698818 = $attributes; } ?>
<?php $component = App\View\Components\Sweetalert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sweetalert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sweetalert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('success'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $attributes = $__attributesOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $component = $__componentOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__componentOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session('info')): ?>
        <?php if (isset($component)) { $__componentOriginal54e362747f6a5fcdcf7fd32363698818 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54e362747f6a5fcdcf7fd32363698818 = $attributes; } ?>
<?php $component = App\View\Components\Sweetalert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sweetalert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sweetalert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('info'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $attributes = $__attributesOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $component = $__componentOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__componentOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session('error')): ?>
        <?php if (isset($component)) { $__componentOriginal54e362747f6a5fcdcf7fd32363698818 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54e362747f6a5fcdcf7fd32363698818 = $attributes; } ?>
<?php $component = App\View\Components\Sweetalert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sweetalert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sweetalert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'error','message' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('error'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $attributes = $__attributesOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__attributesOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54e362747f6a5fcdcf7fd32363698818)): ?>
<?php $component = $__componentOriginal54e362747f6a5fcdcf7fd32363698818; ?>
<?php unset($__componentOriginal54e362747f6a5fcdcf7fd32363698818); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div class="flex justify-between mb-4 sm:-mt-4">
        <div class="font-bold text-md tracking-tight text-black mt-2">Admin / Manage Courddses</div>
        <a href="<?php echo e(route('admin.course.create')); ?>">
            <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                <i class="fa-solid fa-plus fa-xs" style="color: #ffffff;"></i> Add Course
            </button>
        </a>
    </div>
    <hr class="border-gray-200 my-4">
    <div class="flex justify-between mb-4">
        <form id="deleteAllForm" method="POST" action="<?php echo e(route('admin.course.deleteAll')); ?>" onsubmit="return confirmDeleteAll(event);">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="block w-full text-left px-4 py-2 text-sm rounded text-white bg-red-500 hover:bg-red-800">
            <i class="fa-solid fa-trash"></i> Delete All
        </button>
        </form>
        <div class="flex justify-center sm:justify-end w-full sm:w-auto">
            <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
        </div>
        
    </div>
    <!-- <button id="deleteSelected" class="bg-red-500 text-white text-sm px-3 py-2 mb-5 rounded hover:bg-red-700" onclick="confirmDelete(event)">
                    <i class="fa-solid fa-trash fa-xs" style="color: #ffffff;"></i> Delete Selected
                </button> -->
    <div class="overflow-x-auto">
        <!--[if BLOCK]><![endif]--><?php if($search && $$assignedCourses->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No course found for matching "<?php echo e($search); ?>"</p>
        <?php elseif(!$search && $assignedCourses->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No data available in table</p>
        <?php else: ?>
                <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4 ">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_code')" class="w-full h-full flex items-center justify-center">
                                    Course Code
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_code'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_name')" class="w-full h-full flex items-center justify-center">
                                    Course Description
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_name'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('section')" class="w-full h-full flex items-center justify-center">
                                    Section
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'section'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_unit')" class="w-full h-full flex items-center justify-center">
                                    Unit/s
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_unit'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('days_of_the_week')" class="w-full h-full flex items-center justify-center">
                                    Schedule
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'days_of_the_week'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('room')" class="w-full h-full flex items-center justify-center">
                                    Room
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'program_id'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $assignedCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignedCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if($assignedCourse->course): ?>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->course->course_code); ?></td>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->course->course_name); ?></td>
                        <?php else: ?>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->section); ?></td>
                        <!--[if BLOCK]><![endif]--><?php if($assignedCourse->course): ?>
                            <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->course->course_unit); ?></td>
                        <?php else: ?>
                            <td class="text-black border border-gray-400 px-4 py-2">Course Not Found</td>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->days_of_the_week); ?> | <?php echo e($assignedCourse->class_start_time); ?> - <?php echo e($assignedCourse->class_end_time); ?></td>
                        <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($assignedCourse->room); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2">
                                    <div class="flex justify-center items-center space-x-2">
                                        <div x-data="{ open: false, showModal: false }">
                                            <div @click="open = !open" class="mr-5 cursor-pointer">
                                                <a class="bg-slate-500 text-white text-sm mx-auto px-4 py-2 rig hover:bg-blue-700">Action <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></a>
                                            </div>
                                            <div x-show="open" @click.away="open = false" class="absolute right-4 mt-1.5 w-40 bg-white text-left border-2 border-gray-400 rounded-sm shadow-lg py-2 z-20">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                                </a>

                                                <hr class="border-gray-200">
                                                <div x-data="">
                                                    <a href="#" @click="showModal = true" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                        <i class="fa-solid fa-file-pen"></i> Assign Teacher
                                                    </a>

                                                    
                                                    <!-- Modal backdrop, show/hide based on modal state -->
                                                    <div x-show="showModal" class="fixed inset-0 bg-black opacity-50"></div>

                                                    <!-- Modal dialog, show/hide based on modal state -->
                                                    <div x-show="showModal" class="w-full fixed inset-0 flex items-center justify-center z-50">
                                                        <!-- Modal content -->
                                                        <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 w-2/6 max-w-7xl">
                                                            <!-- Modal header -->
                                                            <div class="flex justify-between items-center mb-4">
                                                                <h3 class="text-lg font-semibold text-gray-900">Assign Course to Teacher</h3> 
                                                                <a @click="showModal = false" class="cursor-pointer px-4 py-2 text-gray-400 rounded-md hover:text-blue-500">
                                                                    <i class="fa-solid fa-close"></i>
                                                                </a>                                                          
                                                            </div>
                                                            <hr class="border-gray-200 mb-4">

                                                            <!-- Modal body -->
                                                            <p class=" text-gray-700 text-md w-full font-bold mb-2">Course: <span x-text="courseCode" class="text-red-500"></span> - <span x-text="courseName" class="text-red-500"></span></p>
                                                            v>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="border-gray-200">
                                                <form id="deleteForm" method="POST" action="#" >
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-200">
                                                        <i class="fa-solid fa-trash"></i> Delete Course
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
                <?php echo e($assignedCourses->links()); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

<script>
    document.getElementById('class_start_time').addEventListener('change', function() {
        // Automatically focus on the end time input when start time is entered
        document.getElementById('class_end_time').focus();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(event, courseId, courseName, courseCode) {
        event.preventDefault(); 

        Swal.fire({
            title: `Are you sure you want to delete course ${courseCode} - ${courseName}?`,
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById('deleteForm');
                form.action = "<?php echo e(route('admin.course.deleteSelected', ['id' => ':courseId'])); ?>".replace(':courseId', courseId);
                form.submit();
            }
        });

        return false; 
    }
</script>


<script>
    
    function confirmDeleteAll(event) {
        event.preventDefault(); 

        Swal.fire({
            title: 'Delete all Course?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete all!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                document.getElementById('deleteAllForm').submit();
            }
        });
    }

</script>

<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/livewire/teacher/course-show-table.blade.php ENDPATH**/ ?>