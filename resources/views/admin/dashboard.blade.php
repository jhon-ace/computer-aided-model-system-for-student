<x-admin-app-layout>
    <x-user-route-page-name :routeName="'admin.dashboard'" />
    <x-section-div-style>
                <div class="container mx-auto p-4 uppercase -mb-8">
                    <p class="mb-2 xl:text-3xl text-black font-bold">Welcome admin, {{ Auth::user()->name }} !</p>
                    <div class="  border-t border-gray-600">
                    </div>
                </div>
                <!--  sm:px-10 md:px-12 lg:px-10 xl:px-10 -->
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4 ">
                    <a href="{{ route('admin.department.index') }}">
                        <x-card-div-style>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                            </div>
                            <div class="text-right">
                            <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('departments')->count('id') }}</p>
                                <p>Departments</p>
                            </div>
                        </x-card-div-style>
                    </a>
                    <a href="{{ route('admin.dean.index') }}">
                        <x-card-div-style>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('deans')->count('id') }}</p>
                                <p>Deans</p>
                            </div>
                        </x-card-div-style>
                    </a>
                    <a href="{{ route('admin.program.index') }}">
                        <x-card-div-style>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-sharp fa-solid fa-rectangle-list fa-flip-vertical fa-2xl" style="color: #24a0ff;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('programs')->count('id') }}</p>
                                <p>Programs</p>
                            </div>
                        </x-card-div-style>
                    </a>
                    <a href="{{ route('admin.course.index') }}">
                        <x-card-div-style>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('courses')->count('id') }}</p>
                                <p>Courses</p>
                            </div>
                        </x-card-div-style>
                    </a>
                    <a href="{{ route('admin.teacher.index') }}">
                        <x-card-div-style>
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <i class="fa-solid fa-folder-open fa-2xl" style="color: #00b825;"></i>
                            </div>
                            <div class="text-right">
                                <p class="text-4xl">{{ \Illuminate\Support\Facades\DB::table('teachers')->count('id') }}</p>
                                <p>Teachers</p>
                            </div>
                        </x-card-div-style>
                    </a>
                </div>
                <div class="container mx-auto mt-2 p-4">
                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-2xl font-bold mb-4">Student Enrollees</h2>
                        <canvas id="enrolleesChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div> 
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

