<x-teacher-app-layout>
<x-user-route-page-name :routeName="'teacher.dashboard'" />
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black dark:text-white">
        <div class="h-full ml-14 mb-10 md:ml-48 ">
            <div class="max-w-full mx-auto  mt-10 sm:px-10 md:px-12 lg:px-10 xl:px-10 ">
                <div class="ml-5 font-bold text-md tracking-wide text-gray-600 uppercase">Welcome, {{ Auth::user()->name }} !</div>
                    <div class="grid grid-cols-1  sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                        <a href="" class="">
                            <div class=" shadow-lg rounded-lg flex items-center justify-between p-10 border-2 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                                </div>
                                <div class="text-right">
                                <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('departments')->count('id') }}</p>
                                    <p>My Courses</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-2 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14  rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('departments')->count('id') }}</p>
                                    <p>My Modules</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-2 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14  rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('departments')->count('id') }}</p>
                                    <p>My Modules</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="bg-white shadow-lg rounded-md flex items-center justify-between p-10 border-2 border-gray-300 dark:border-gray-600 text-black font-medium group">
                                <div class="flex justify-center items-center w-14 h-14  rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                                </div>
                                <div class="text-right">
                                    <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('departments')->count('id') }}</p>
                                    <p>My Modules</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="container mx-auto mt-2 p-4">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold mb-4">Student Enrollees</h2>
                            <canvas id="enrolleesChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


</x-teacher-app-layout>
