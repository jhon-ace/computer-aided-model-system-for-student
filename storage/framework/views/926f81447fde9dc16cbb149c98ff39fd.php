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
        <div class="font-bold text-md tracking-tight text-black mt-2">Admin / Manage Courses</div>
            <a href="<?php echo e(route('admin.course.create')); ?>">
                <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                    <i class="fa-solid fa-plus fa-xs" style="color: #ffffff;"></i> Add Course
                </button>
            </a>
        </div>
        <hr class="border-gray-200 my-4">
        <div class="flex justify-end mb-4">
            <div class="flex justify-center sm:justify-end w-full sm:w-auto">
                <input wire:model.live="search" type="text" class="border text-black border-gray-300 rounded-md p-2 w-64" placeholder="Search..." autofocus>
            </div>
        </div>
        <div class="overflow-x-auto">
            <!--[if BLOCK]><![endif]--><?php if($search && $courses->isEmpty()): ?>
                <p class="text-black mt-8 text-center">No course found for matching "<?php echo e($search); ?>"</p>
            <?php elseif(!$search && $courses->isEmpty()): ?>
                <p class="text-black mt-8 text-center">No data available in table</p>
            <?php else: ?>
                <table class="table-auto border-collapse border border-gray-400 w-full text-center mb-4 ">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2"><input type="checkbox" id="selectAll"></th>
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
                                    Course Name
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
                                <button wire:click="sortBy('course_description')" class="w-full h-full flex items-center justify-center">
                                    Course Description
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_description'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_semester')" class="w-full h-full flex items-center justify-center">
                                    Course Semester
                                    <!--[if BLOCK]><![endif]--><?php if($sortField == 'course_semester'): ?>
                                        <!--[if BLOCK]><![endif]--><?php if($sortDirection == 'asc'): ?>
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                            <?php else: ?>
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i> 
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('program_id')" class="w-full h-full flex items-center justify-center">
                                    Course Program
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
                    <form id="deleteSelectedForm" action="<?php echo e(route('admin.course.deleteSelected')); ?>" method="POST" onsubmit="return confirmDelete(event);">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input type="hidden" wire:model="deleteAllClicked" value="true">
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-black border border-gray-400 px-4 py-2"><input type="checkbox" name="selected[]" value="<?php echo e($course->id); ?>"></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_code); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_name); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_description); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_semester); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->program->program_abbreviation); ?></td>
                                    <td class="text-black border border-gray-400 px-4 py-2">
                                        <div class="flex justify-center items-center space-x-2">
                                            <div class="relative" x-data="{ open: false, showModal: false }">
                                                <div @click="open = !open" class="mr-5 cursor-pointer">
                                                    <a class="bg-slate-500 text-white text-sm mx-auto px-4 py-2 rig hover:bg-blue-700">Action <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></a>
                                                </div>
                                                <div x-show="open" @click.away="open = false" class="absolute right-4 mt-1.5 w-40 bg-white text-left border-2 border-gray-400 rounded-sm shadow-lg py-2 z-20">
                                                    <a href="<?php echo e(route('admin.course.edit', $course->id)); ?>" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
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
                                                            <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 w-full max-w-7xl">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between items-center mb-4">
                                                                    <h3 class="text-lg font-semibold text-gray-900">Select Teacher for the Course</h3>
                                                                    <hr class="border-gray-200">                                                                
                                                                </div>
                                                                
                                                                <!-- Modal body -->
                                                                <p>Teacher Name: <span x-text="teacherName"></span></p>
                                                                <label for="semester" class="block text-gray-700 text-md w-72 font-bold mb-2">Select Semester:</label>
                                                                
                                                                <select id="semester" name="semester" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline">
                                                                    <option value="1st semester">1st Semester</option>
                                                                    <option value="2nd semester">2nd Semester</option>
                                                                </select>
                                                                
                                                                <label for="course_thaught_id" class="block text-gray-700 text-md font-bold mb-2">Select Courses:</label>
                                                                <select id="course_thaught_id" name="course_thaught_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['course_thaught_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                                                    
                                                                </select>
                                                                <!-- Table -->
                                                                <table class="min-w-full divide-y divide-gray-200 mt-4">
                                                                    <thead class="bg-gray-50">
                                                                        <tr>
                                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                                <!-- Table header cells -->
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    
                                                                    </tbody>
                                                                </table>

                                                                <!-- Modal footer -->
                                                                <div class="mt-6 flex justify-end">
                                                                    <a @click="showModal = false" class="cursor-pointer px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none">
                                                                        Cancel
                                                                    </a>
                                                                    <a class="cursor-pointer px-4 py-2 bg-blue-600 text-white rounded-md ml-4 hover:bg-blue-700 focus:outline-none">
                                                                        Save
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>       
                </table>
                    <button type="submit" class="bg-red-500 text-white text-sm px-4 py-2 rounded hover:bg-red-700 mb-2">Delete Selected</button>
                </form>
            <?php echo e($courses->links()); ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>


<script>
    // Function to confirm delete action using SweetAlert2
    function confirmDelete(event) {
        event.preventDefault(); // Prevent form submission initially

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form programmatically
                document.getElementById('deleteSelectedForm').submit();
            }
        });
    }

    // Check all checkboxes when "selectAll" checkbox is clicked
    document.getElementById('selectAll').addEventListener('change', function(e) {
        const checkboxes = document.querySelectorAll('input[name="selected[]"]');
        checkboxes.forEach(checkbox => checkbox.checked = e.target.checked);
    });
</script>


<?php /**PATH C:\Users\Jhon Ace\Desktop\guide\resources\views/livewire/course-show-table.blade.php ENDPATH**/ ?>