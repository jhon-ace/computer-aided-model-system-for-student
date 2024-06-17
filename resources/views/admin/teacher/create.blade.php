<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.teacher.create'" />
    <x-section-div-style>
        <div class="container mx-auto p-4">
            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium mx-auto">
                <div class="flex justify-between mb-4 sm:-mt-4">
                    <div class="font-bold text-md tracking-tight text-black  -ml-3 px-3 py-2">Admin / Add Teacher</div>
                    <a href="{{ route('admin.teacher.index') }}">
                        <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to list
                        </button>
                    </a>
                </div>
                <hr class="border-gray-200 my-4 ">    
                <form action="{{ route('admin.teacher.store') }}" method="POST" class="" enctype="multipart/form-data">
                    <x-caps-lock-detector />
                    @csrf

                    <div class="mb-4">
                        <input type="file" name="teacher_photo" id="teacher_photo" class="hidden" accept="image/*" onchange="previewImage(event)">
                        <label for="teacher_photo" class="cursor-pointer flex flex-col items-center">
                            <div id="imagePreviewContainer" class="mb-2 text-center">
                                <img id="imagePreview" src="{{ asset('assets/img/user.png') }}" class="rounded-lg w-48 h-auto">
                            </div>
                            <span class="text-sm text-gray-500">Select Photo</span>
                        </label>
                        <x-input-error :messages="$errors->get('teacher_photo')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-md font-bold mb-2">Teacher Name:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-md font-bold mb-2">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-md font-bold mb-2">Password:</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" value="{{ old('password') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" required autofocus>
                            <button type="button" class="absolute inset-y-0 right-0 px-4 py-2 text-gray-500 focus:outline-none" id="togglePassword">
                                <i class="far fa-eye"></i> <!-- Font Awesome eye icon -->
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <label for="status" class="block text-gray-700 text-md font-bold mb-2">Status:</label>
                        <select id="status" name="status" value="{{ old('status') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('status') is-invalid @enderror" required autocomplete="department_dean">
                            <option value="" selected>Select Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="department_id" class="block text-gray-700 text-md font-bold mb-2">Select Department:</label>
                        <select id="department_id" name="department_id" value="{{ old('department_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('department_id') is-invalid @enderror" required>
                            <option value="" selected>Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                            @endforeach
                        </select>
                        <small class="mt-2">
                            <span class="text-red-500">Note:</span> Your selected department for the faculty won't be changed anymore.
                        </small>
                        <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
                    </div>
                    <div class="flex mb-4 mt-5 justify-center">
                        <button type="submit" class="w-80 bg-blue-500 text-white px-4 py-2 rounded-md">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-section-div-style>
</x-admin-app-layout>

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
