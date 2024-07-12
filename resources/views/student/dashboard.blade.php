@php
    $user = Auth::user();
@endphp
<x-student-app-layout>
    <x-user-route-page-name :routeName="'student.dashboard'" />
    <x-student.section-div-style>

        <div class="container mx-auto p-4 uppercase -mb-8">
            <p class="mb-2 xl:text-3xl text-black font-bold">Welcome, <span class="text-red-500">{{ $user->name }}</span>!</p>
            <div class="border-t border-gray-600"></div>
        </div>
        @if (session('success'))
        <x-sweetalert type="success" :message="session('success')" />
        @endif

        @if (session('info'))
            <x-sweetalert type="info" :message="session('info')" />
        @endif

        @if (session('error'))
       
        <x-sweetalert type="error" :message="session('error')" />
        @endif
        <div class="flex flex-wrap gap-4 mt-2">
            <!-- Repeat this card for each class -->
            @if (count($coursesEnrolled)> 0)
                @foreach ($courseAssignments as $courseAssignment)
                    @foreach ( $coursesEnrolled as $courseEnrolled )
                            @if ($courseEnrolled->course_assignment_id === $courseAssignment->id)
                                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                                    <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                                        <div class="flex items-center mb-4">
                                            <div class="flex-shrink-0">
                                                <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/50" alt="Profile picture">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-lg font-semibold text-gray-800">{{ $courseAssignment->course->course_code }}</div>
                                                <div class="text-sm text-gray-600">{{ $courseAssignment->teacher->name }}</div>
                                            </div>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="text-gray-700">{{ $courseAssignment->class_code }}</p>
                                        </div>
                                        <div class="mt-4 flex justify-between items-center">
                                            <div>
                                                <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 uppercase rounded-full">Active</span>
                                            </div>
                                            <div>
                                                <a href="{{ route('student.student.index', ['userID' => auth()->user()->id, 'assignmentTableID' => $courseAssignment->id, 'courseID' => $courseAssignment->course->id]) }}" class="text-xs text-gray-500 hover:text-gray-700">Go to Class</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach   
                @endforeach
        <!-- End of card -->    
            @else
                <div class="flex  w-full h-20 rounded-[5px] p-4 ">
                    <div class="flex items-center mx-auto">
                        <div class="p-3.5 w-full ml-2 text-md text-black">Currently not enrolled in any courses</div>
                    </div>
                </div>
            @endif
           

            <div id="inviteCodeModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 opacity-0 pointer-events-none transition-opacity duration-500">
                <div class="bg-white rounded-lg p-6 max-w-md mx-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold text-black">Join Class</h3>
                        <button id="closeModal" class="text-gray-500 hover:text-gray-800">
                            <i class="fa-solid fa-times"></i>
                        </button>
                    </div>
                    <form action="{{route('student.joinClass')}}" method="post">
                        @csrf
                        <label for="course_code" class="block text-gray-700 text-md font-bold mb-2">Class Code:</label>
                        <input type="text" name="class_code" id="class_code"  class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline @error('course_code') is-invalid @enderror" required autofocus>
                        <button id="closeModalBottom" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">
                        Join
                        </button>
                    </form>     
                </div>
            </div>
            <button id="openModal" class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-base shadow-md">
                Add Class Code
            </button>
        </div>

    </x-student.section-div-style>
</x-student-app-layout>

<x-show-hide-sidebar
    toggleButtonId="toggleButton"
    sidebarContainerId="sidebarContainer"
    dashboardContentId="dashboardContent"
    toggleIconId="toggleIcon"
/>

<script>
   

    document.addEventListener('DOMContentLoaded', function () {
        const openModalButton = document.getElementById('openModal');
        const closeModalButtons = document.querySelectorAll('#closeModal, #closeModalBottom');
        const modal = document.getElementById('inviteCodeModal');

        openModalButton.addEventListener('click', function () {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
        });

        closeModalButtons.forEach(button => {
            button.addEventListener('click', function () {
                modal.classList.remove('opacity-100', 'pointer-events-auto');
                modal.classList.add('opacity-0', 'pointer-events-none');
            });
        });
    });
</script>
