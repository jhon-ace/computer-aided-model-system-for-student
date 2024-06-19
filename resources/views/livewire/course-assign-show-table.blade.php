<div class="bg-white shadow-lg rounded-md p-5 sm:p-6 md:p-7 lg:p-8 text-black font-medium">
        @if($search && $courses_assign->isEmpty())
            <p class="text-black mt-8 text-center">No course found for matching "{{ $search }}"</p>
        @elseif(!$search && $courses_assign->isEmpty())
            <p class="text-black mt-8 text-center">No data available in table</p>
        @else
        <table class="w-full text-center mb-4 ">
                    <thead class=" text-black">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('course_id')" class="w-full h-full flex items-center justify-center">
                                    Course
                                    @if ($sortField == 'course_id')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('section')" class="w-full h-full flex items-center justify-center">
                                    Section Name
                                    @if ($sortField == 'section')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        @endif
                                    @endif
                                </button>
                            </th>
                            <th class="border border-gray-400 px-4 py-2">
                                <button wire:click="sortBy('days_of_the_week')" class="w-full h-full flex items-center justify-center">
                                    Schedule
                                    @if ($sortField == days_of_the_week')
                                        @if ($sortDirection == 'asc')
                                            &nbsp;<i class="fa-solid fa-down-long fa-xs"></i>
                                        @else
                                            &nbsp;<i class="fa-solid fa-up-long fa-xs"></i>
                                        @endif
                                    @endif
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses_assign as $course_assign)
                            <tr>
                                <td class="text-black border border-gray-400 px-4 py-2">{{ $course_assign->course->course_code }} - {{ $course_assign->course->course_name }}</td>
                                <td class="text-black border border-gray-400 px-4 py-2">{{ $course_assign->section }}</td>
                                <td class="text-black border border-gray-400 px-4 py-2">
                                    {{ $course_assign->days_of_the_week }} | 
                                    {{ date('h:i A', strtotime($course_assign->class_start_time)) }} - 
                                    {{ date('h:i A', strtotime($course_assign->class_end_time)) }}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
        @endif

</div>