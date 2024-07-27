<?php

    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';

    $result = '';

    // Get 3 random letters
    for ($i = 0; $i < 3; $i++) {
        $result .= $letters[rand(0, strlen($letters) - 1)];
    }

    // Get 3 random numbers
    for ($i = 0; $i < 3; $i++) {
        $result .= $numbers[rand(0, strlen($numbers) - 1)];
    }

    // Convert result string to an array to shuffle
    $resultArray = str_split($result);

    // Shuffle the array to mix letters and numbers
    for ($i = count($resultArray) - 1; $i > 0; $i--) {
        $j = rand(0, $i);
        $temp = $resultArray[$i];
        $resultArray[$i] = $resultArray[$j];
        $resultArray[$j] = $temp;
    }

    // Join the array back into a string
    $result = implode('', $resultArray);

    
   




?>


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
        <!--[if BLOCK]><![endif]--><?php if($search && $courses->isEmpty()): ?>
            <p class="text-black mt-8 text-center">No course found for matching "<?php echo e($search); ?>"</p>
        <?php elseif(!$search && $courses->isEmpty()): ?>
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
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_code); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_name); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_description); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_unit); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->course_semester); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2"><?php echo e($course->program->program_abbreviation); ?></td>
                                <td class="text-black border border-gray-400 px-4 py-2">
                                    <div class="flex justify-center items-center space-x-2">
                                        <div x-data="{ open: false, showModal: false }">
                                            <div @click="open = !open" class="mr-5 cursor-pointer">
                                                <a class="bg-slate-500 text-white text-sm mx-auto px-4 py-2 rig hover:bg-blue-700">Action <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></a>
                                            </div>
                                            <div x-show="open" @click.away="open = false" class="absolute right-4 mt-1.5 w-40 bg-white text-left border-2 border-gray-400 rounded-sm shadow-lg py-2 z-20">
                                                <a href="<?php echo e(route('admin.course.edit', $course->id)); ?>" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">
                                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                                </a>

                                                <hr class="border-gray-200">
                                                <div x-data="{ showModal: false, courseId: <?php echo e($course->id); ?>, courseCode: '<?php echo e($course->course_code); ?>', courseName: '<?php echo e($course->course_name); ?>'}">
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
                                                            <form  method="POST" action="<?php echo e(route('admin.course.assignCourse', $course->id)); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <label for="teacher_id" class="block text-gray-700 text-md w-72 font-bold mb-2">Select Teacher:</label>
                                                                <select id="teacher_id" name="teacher_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['teacher_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                                                    <?php
                                                                        $hasTeacher = false;
                                                                    ?>

                                                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <!--[if BLOCK]><![endif]--><?php if($teacher->department_id === $course->program->department_id): ?>
                                                                            <?php $hasTeacher = true; ?>
                                                                            <option class="py-2 px-3 text-md text-black leading-tight focus:outline-none focus:shadow-outline" value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->name); ?></option>
                                                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                                                                    <!--[if BLOCK]><![endif]--><?php if(!$hasTeacher): ?>
                                                                        <option class="py-2 px-3 text-md text-black leading-tight focus:outline-none focus:shadow-outline" value="" disabled>No teacher available for this course.</option>
                                                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                                </select>

                                                                <!-- Hidden input field for department ID -->
                                                                <input type="hidden" name="department_id" value="<?php echo e($course->program->department_id); ?>">

                                                                <label for="section" class="block text-gray-700 text-md w-72 font-bold mb-2 mt-4">Enter Section:</label>
                                                                <input type="text" name="section" id="section" value="<?php echo e(old('section')); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required placeholder="ex:BSIT-1-B-1ST-25">
                                                                
                                                                <label for="room" class="block text-gray-700 text-md w-72 font-bold mb-2 mt-4">Assign Room:</label>
                                                                <input type="text" name="room" id="room" value="<?php echo e(old('room')); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ex:NH201">
                                                                <!-- Multi-select box for days of the week -->
                                                                
                                                                <div class="max-w-xl mx-auto grid grid-cols-3 gap-4">
                                                                    <div>
                                                                        <label for="days_of_week" class="block text-gray-700 text-md font-bold mb-2 mt-4">Day:</label>
                                                                        <select id="days_of_week" name="days_of_the_week" class="bg-gray-50 border leading-none border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-[13.7px] focus:outline-none focus:shadow-outline" required>
                                                                            <option value="M.W">M.W</option>
                                                                            <option value="M.W.F">M.W.F</option>
                                                                            <option value="T.Th">T.Th</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>
                                                                        <label for="start-time" class="block text-gray-700 text-md font-bold mb-2 mt-4">Start time:</label>
                                                                        <input type="time" id="start-time" name="class_start_time" class="bg-gray-50 border leading-none border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:shadow-outline" min="07:00" max="19:00" value="07:00" required />
                                                                    </div>
                                                                    <div>
                                                                        <label for="end-time" class="block text-gray-700 text-md font-bold mb-2 mt-4">End time:</label>                                                                         
                                                                        <input type="time" id="end-time" name="class_end_time" class="bg-gray-50 border leading-none border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:outline-none focus:shadow-outline" min="07:00" max="19:00" value="19:00" required />
                                                                        
                                                                    </div>                                                                   
                                                                </div>
                                                                                                                             
                                                                <!-- Modal footer -->
                                                                <div class="mt-6 flex justify-end">
                                                                    <a @click="showModal = false" class="cursor-pointer px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none">
                                                                        Cancel
                                                                    </a>
                                
                                                                    <button type="submit"  class="cursor-pointer px-4 py-2 bg-blue-600 text-white rounded-md ml-4 hover:bg-blue-700 focus:outline-none">
                                                                        Save
                                                                    </button>

                                                                </div>
                                                                <input type="text" id="class_code" name="class_code"  value="<?php echo e($result); ?>" class="hidden">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="border-gray-200">
                                                <form id="deleteForm" method="POST" action="<?php echo e(route('admin.course.deleteSelected', ['id' => $course->id])); ?>" onsubmit="return confirmDelete(event, <?php echo e($course->id); ?>, '<?php echo e(addslashes($course->course_name)); ?>','<?php echo e($course->course_code); ?>');">
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
                <?php echo e($courses->links()); ?>

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



<?php /**PATH C:\Users\Joshua Tabura\Desktop\computer-aided-model-system-for-student\resources\views/livewire/course-show-table.blade.php ENDPATH**/ ?>