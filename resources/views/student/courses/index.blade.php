@extends('layouts.main-layout')

@section('content')
    {{-- ### --}}

    <div class="mt-5 flex flex-col px-5">
        <div class="flex w-full items-center justify-between">
            <div class="flex flex-col gap-1">
                <p class="text-[30px] font-extrabold leading-[45px]">My Courses</p>
                <p class="text-[#7F8190]">Finish all given tests to grow</p>
            </div>
        </div>
    </div>

    <div class="course-list-container mt-[30px] flex flex-col gap-[30px] px-5">
        <div class="course-list-header flex flex-nowrap justify-between border-b border-[#EEEEEE] pb-4 pr-10">
            <div class="flex w-[300px] shrink-0">
                <p class="text-[#7F8190]">Course</p>
            </div>
            <div class="flex w-[150px] shrink-0 justify-center">
                <p class="text-[#7F8190]">Date Created</p>
            </div>
            <div class="flex w-[170px] shrink-0 justify-center">
                <p class="text-[#7F8190]">Category</p>
            </div>
            <div class="flex w-[120px] shrink-0 justify-center">
                <p class="text-[#7F8190]">Action</p>
            </div>
        </div>

        @forelse ($my_courses as $course)
            <div class="list-items flex flex-nowrap justify-between pr-10">
                <div class="flex w-[300px] shrink-0">
                    <div class="flex items-center gap-4">
                        <div class="flex h-16 w-16 shrink-0 overflow-hidden rounded-full">
                            <img src="{{ Storage::url($course->cover) }}" class="object-cover" alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="text-lg font-bold">{{ $course->name }}</p>
                            <p class="text-[#7F8190]">Beginners</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-[150px] shrink-0 items-center justify-center">
                    <p class="font-semibold">
                        {{ \Carbon\Carbon::parse($course->created_at)->format(' F j, Y') }}</p>
                </div>

                @if ($course->category->name == 'Programming')
                    <div class="flex w-[170px] shrink-0 items-center justify-center">
                        <p class="rounded-full bg-[#EAE8FE] p-[8px_16px] text-sm font-bold text-[#6436F1]">
                            {{ $course->category->name }}</p>
                    </div>
                @elseif ($course->category->name == 'Digital Marketing')
                    <div class="flex w-[170px] shrink-0 items-center justify-center">
                        <p class="rounded-full bg-[#D5EFFE] p-[8px_16px] text-sm font-bold text-[#066DFE]">
                            {{ $course->category->name }}</p>
                    </div>
                @endif

                <div class="flex w-[120px] shrink-0 items-center">

                    @if ($course->nextQuestionId !== null)
                        <a href="{{ route('dashboard.learning.course', ['course' => $course->id, 'question' => $course->nextQuestionId]) }}"
                            class="h-[41px] w-full rounded-full bg-[#6436F1] p-[10px_20px] text-center text-sm font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Start
                            Test</a>
                    @else
                        <a href="{{ route('dashboard.learning.rapport.course', $course) }}"
                            class="h-[41px] w-full rounded-full bg-[#6436F1] p-[10px_20px] text-center text-sm font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Result</a>
                    @endif
                </div>
            </div>
        @empty
        @endforelse
    </div>

    {{-- ### --}}
@endsection
