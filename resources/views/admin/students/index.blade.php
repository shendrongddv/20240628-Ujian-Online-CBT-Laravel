@extends('layouts.main-layout')

@section('content')
    {{-- ### --}}

    <div class="mt-5 flex flex-col gap-10 px-5">
        <div class="breadcrumb flex items-center gap-[30px]">
            <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Home</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="index.html" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Manage Courses</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Course Students</a>
        </div>
    </div>
    <div class="header ml-[70px] mt-10 flex w-[940px] items-center justify-between pr-[70px]">
        <div class="flex items-center gap-6">
            <div class="relative flex h-[150px] w-[150px] shrink-0 overflow-hidden">
                <img src="{{ Storage::url($course->cover) }}" class="h-full w-full object-contain" alt="icon">
                <p
                    class="text-nowrap absolute bottom-0 left-1/2 -translate-x-1/2 transform rounded-full bg-[#FFF2E6] p-[8px_16px] text-sm font-bold text-[#F6770B]">
                    {{ $course->category->name }}</p>
            </div>
            <div class="flex flex-col gap-5">
                <h1 class="text-[30px] font-extrabold leading-[45px]">{{ $course->name }}</h1>
                <div class="flex items-center gap-5">
                    <div class="flex items-center gap-[10px]">
                        <div class="flex h-6 w-6 shrink-0">
                            <img src="{{ asset('/images/icons/calendar-add.svg') }}" alt="icon">
                        </div>
                        <p class="font-semibold">{{ \Carbon\Carbon::parse($course->created_at)->format(' F j, Y') }}</p>
                    </div>
                    <div class="flex items-center gap-[10px]">
                        <div class="flex h-6 w-6 shrink-0">
                            <img src="{{ asset('/images/icons/profile-2user-outline.svg') }}" alt="icon">
                        </div>
                        <p class="font-semibold">{{ count($students) }} students</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <a href="{{ route('dashboard.course.course_student.create', $course) }}"
                class="h-[52px] rounded-full bg-[#6436F1] p-[14px_30px] font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Add
                Student</a>
        </div>
    </div>
    <div id="course-test" class="mx-[70px] mt-[30px] w-[870px]">
        <h2 class="text-2xl font-bold">Students</h2>
        <div class="mt-2 flex flex-col gap-5">
            @forelse ($students as $student)
                <div
                    class="student-card flex w-full items-center justify-between rounded-[20px] border border-[#EEEEEE] p-4">
                    <div class="flex items-center gap-4">
                        <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                            <img src="{{ asset('/images/photos/default-photo.svg') }}" class="h-full w-full object-cover"
                                alt="photo">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="text-lg font-bold">{{ $student->name }}</p>
                            <p class="text-[#7F8190]">{{ $student->email }}</p>
                        </div>
                    </div>

                    @if ($student->status = 'Passed')
                        <div class="flex items-center gap-[14px]">
                            <p
                                class="mr-[6px] rounded-[10px] bg-[#06BC65] p-[6px_10px] text-xs font-bold text-white outline-dashed outline-[2px] outline-offset-[4px] outline-[#06BC65]">
                                Passed</p>
                        </div>
                    @elseif ($student->status = 'Not Passed')
                        <div class="flex items-center gap-[14px]">
                            <p
                                class="mr-[6px] rounded-[10px] bg-[#FD445E] p-[6px_10px] text-xs font-bold text-white outline-dashed outline-[2px] outline-offset-[4px] outline-[#FD445E]">
                                Not Passed</p>
                        </div>
                    @elseif ($student->status = 'Not Started')
                        <div class="flex items-center gap-[14px]">
                            <p
                                class="mr-[6px] rounded-[10px] bg-[#FD445E] p-[6px_10px] text-xs font-bold text-white outline-dashed outline-[2px] outline-offset-[4px] outline-[#FD445E]">
                                Not Started</p>
                        </div>
                    @endif

                </div>
            @empty
                <p>Belum ada student pada kelas ini.</p>
            @endforelse

        </div>
    </div>

    {{-- ### --}}
@endsection
