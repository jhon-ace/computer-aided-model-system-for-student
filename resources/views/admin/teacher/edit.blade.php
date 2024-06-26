<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.teacher.edit'" />
    <x-section-div-style>
        <div class="container mx-auto p-4">
            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium">
                <div class="flex justify-between mb-4 sm:-mt-4">
                    <div class="font-bold text-md tracking-tight text-black  -ml-3 px-3 py-2">Admin / Edit Teacher</div>
                    <a href="{{ route('admin.teacher.index') }}">
                        <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to list
                        </button>
                    </a>
                </div>
                <hr class="border-gray-200 my-4 ">   
                <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" class="" enctype="multipart/form-data">
                    <x-caps-lock-detector />
                    @csrf   
                    @method('PUT')

                    <div class="mb-4">
                        <input type="file" name="teacher_photo" id="teacher_photo" class="hidden" accept="image/*" onchange="previewImage(event)">
                        <label for="teacher_photo" class="cursor-pointer flex flex-col items-center">
                            <div id="imagePreviewContainer" class="mb-2 text-center">
                                <img id="imagePreview" src="{{ $teacher->teacher_photo ? asset('storage/teacher_photos/' . $teacher->teacher_photo) : asset('assets/img/user.png') }}"
                                class="rounded-lg w-48 h-auto" onerror="handleImageError(this)">
                            </div>
                            <span class="text-sm text-gray-500">Select Photo</span>
                            <span id="errorMessage" class="text-sm" style="display: none; color: red;">Failed to load image from database, default photo displayed.</span>
                            
                        </label>
                        <x-input-error :messages="$errors->get('teacher_photo')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-md font-bold mb-2">Faculty Name:</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $teacher->name) }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('dean_fullname') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-md font-bold mb-2">Faculty Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $teacher->email) }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-md font-bold mb-2">Faculty Password:</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" value="{{ old('password', $teacher->password) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" required autofocus>
                            <button type="button" class="absolute inset-y-0 right-0 px-4 py-2 text-gray-500 focus:outline-none" id="togglePassword">
                                <i class="far fa-eye"></i> <!-- Font Awesome eye icon -->
                            </button>
                        </div>
                        <small class="mt-2">
                            <span class="text-red-500">Note:</span> To change the password, delete all hashed password first, then type your new password.
                        </small>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="status" class="block text-gray-700 text-md font-bold mb-2">Status:</label>
                        <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required >
                            @if($teacher->status === 'Active')
                                <option value="{{$teacher->status }}" selected>{{ $teacher->status }}</option>
                                <option value="Inactive">Inactive</option>
                            @else
                                <option value="{{$teacher->status }}" selected>{{ $teacher->status }}</option>
                                <option value="Active">Active</option>
                                
                            @endif
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="department_id" class="block text-gray-700 text-md font-bold mb-2">Program:</label>
                        <select id="department_id" name="department_id"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('department_id') is-invalid @enderror" required>
                            @if($teacher->department->department_name)
                                <option value="{{ $teacher->department->id }}" selected>{{ $teacher->department->department_name }}</option>
                            @else    
                                <option value="" selected>Select Program</option>
                            @endif
                        </select>
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        <small class="mt-2">
                            <span class="text-red-500">Note:</span> The department where the faculty {{$teacher->name}} is assigned can't be changed.
                        </small>
                    </div>
                    <div class="flex  mb-4 mt-5 justify-center">
                        <button type="submit" class="w-80 bg-blue-500 text-white px-4 py-2 rounded-md">
                            Save Chages
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-section-div-style>
</x-system-layout>

<x-show-hide-sidebar
    toggleButtonId="toggleButton"
    sidebarContainerId="sidebarContainer"
    dashboardContentId="dashboardContent"
    toggleIconId="toggleIcon"
/>

<script>
   function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
        document.getElementById('imagePreviewContainer').style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<script>
function handleImageError(image) {
    // Set the default image
    image.src = "{{ asset('assets/img/user.png') }}";
    
    // Display the error message
    document.getElementById('errorMessage').style.display = 'block';
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#togglePassword').click(function() {
            var passwordField = $('#password');
            var fieldType = passwordField.attr('type');
            
            if (fieldType === 'password') {
                passwordField.attr('type', 'text');
                $(this).find('i').removeClass('far fa-eye').addClass('far fa-eye-slash'); // Toggle to show password icon
            } else {
                passwordField.attr('type', 'password');
                $(this).find('i').removeClass('far fa-eye-slash').addClass('far fa-eye'); // Toggle to hide password icon
            }
        });
    });
</script>
