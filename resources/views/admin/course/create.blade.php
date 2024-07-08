<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.course.create'" />
    <x-section-div-style>
        <div class="container mx-auto p-4 ">
            <div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-8 lg:p-10 text-black font-medium mx-auto">
                <div class="flex justify-between mb-4 sm:-mt-4">
                    <div class="font-bold text-md tracking-tight text-black  -ml-3 px-3 py-2">Admin / Add Course / Subject</div>
                    <a href="{{ route('admin.course.index') }}">
                        <button class="bg-blue-500 text-white text-sm px-3 py-2 rounded hover:bg-blue-700">
                        <i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Back to list
                        </button>
                    </a>
                </div>
                <hr class="border-gray-200 my-4 ">  
                <form action="{{ route('admin.course.store') }}" method="POST" class="">
                    <x-caps-lock-detector />
                    @csrf
                    <div class="mt-4">
                        <label for="program_id" class="block text-gray-700 text-md font-bold mb-2">Choose Program for the course:</label>
                        <select id="program_id" name="program_id" value="{{ old('program_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('department_id') is-invalid @enderror" required>
                            <option value="" selected>Select Program</option>
                            @foreach($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->program_abbreviation }}</option>
                            @endforeach
                        </select>
                        <small class="mt-2">
                            <span class="text-red-500">Note:</span> Your selected program for the course won't be changed anymore.
                        </small>
                        <x-input-error :messages="$errors->get('program_id')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="course_code" class="block text-gray-700 text-md font-bold mb-2">Course Code:</label>
                        <input type="text" name="course_code" id="course_code" value="{{ old('course_code') }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('dean_fullname') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('course_code')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="course_name" class="block text-gray-700 text-md font-bold mb-2">Course Name:</label>
                        <input type="text" name="course_name" id="course_name" value="{{ old('course_name') }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('dean_fullname') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('course_name')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="course_description" class="block text-gray-700 text-md font-bold mb-2">Course Description:</label>
                        <input type="text" name="course_description" id="course_description" value="{{ old('course_description') }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('dean_fullname') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('course_description')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="course_unit" class="block text-gray-700 text-md font-bold mb-2">Course Unit:</label>
                        <input type="text" name="course_unit" id="course_unit" value="{{ old('course_unit') }}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('dean_fullname') is-invalid @enderror" required autofocus>
                        <x-input-error :messages="$errors->get('course_unit')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="course_semester" class="block text-gray-700 text-md font-bold mb-2">Course Semester:</label>
                        <select id="course_semester" name="course_semester" value="{{ old('course_semester') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('department_dean') is-invalid @enderror" required autocomplete="department_dean">
                            <option value="" selected>Select Semester</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                        </select>
                        <x-input-error :messages="$errors->get('course_semester')" class="mt-2" />
                    </div>
                    <input type="text" id="class_code" name="class_code" class="">

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
    function generateRandomString() {
        const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        const numbers = '0123456789';
        
        let result = '';
        
        for (let i = 0; i < 3; i++) {
            // Get a random letter
            result += letters.charAt(Math.floor(Math.random() * letters.length));
        }
        
        for (let i = 0; i < 3; i++) {
            // Get a random number
            result += numbers.charAt(Math.floor(Math.random() * numbers.length));
        }
        
        // Convert result string to an array to shuffle
        let resultArray = result.split('');
        
        // Shuffle the array to mix letters and numbers
        for (let i = resultArray.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [resultArray[i], resultArray[j]] = [resultArray[j], resultArray[i]];
        }
        
        // Join the array back into a string
        result = resultArray.join('');
        
        // Set the value of the input element with ID 'class_code'
        document.getElementById('class_code').value = result;
        console.log(result);
    }

    // Run the function when the page loads
    window.onload = generateRandomString;

   
</script>
