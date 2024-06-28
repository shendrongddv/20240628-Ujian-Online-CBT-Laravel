@extends('layouts.main-layout')

@section('content')

    {{-- ### --}}

    <div class="mt-5 flex flex-col gap-10 px-5">
        <div class="breadcrumb flex items-center gap-[30px]">
            <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Home</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="{{ route('dashboard.courses.index') }}"
                class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Manage Courses</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Course Details</a>
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
                        <p class="font-semibold">
                            {{ \Carbon\Carbon::parse($course->created_at)->format(' F j, Y') }}</p>
                    </div>
                    <div class="flex items-center gap-[10px]">
                        <div class="flex h-6 w-6 shrink-0">
                            <img src="{{ asset('/images/icons/profile-2user-outline.svg') }}" alt="icon">
                        </div>
                        {{-- <p class="font-semibold">{{ count($students) }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="bg-red-700 px-5 py-5 text-white">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('dashboard.course_question.update', $courseQuestion) }}" id="add-question"
        class="mx-[70px] mt-[30px] flex flex-col gap-5">
        @csrf

        <h2 class="text-2xl font-bold">Add New Question</h2>
        <div class="flex flex-col gap-[10px]">
            <p class="font-semibold">Question</p>
            <div
                class="flex h-[52px] w-[500px] items-center rounded-full border border-[#EEEEEE] p-[14px_16px] focus-within:border-2 focus-within:border-[#0A090B]">
                <div class="mr-[14px] flex h-6 w-6 items-center justify-center overflow-hidden">
                    <img src="{{ asset('/images/icons/note-text.svg') }}" class="h-full w-full object-contain"
                        alt="icon">
                </div>
                <input type="text"
                    class="w-full font-semibold outline-none placeholder:font-normal placeholder:text-[#7F8190]"
                    placeholder="Write the question" name="question">
            </div>
        </div>
        <div class="flex flex-col gap-[10px]">
            <p class="font-semibold">Answers</p>
            @for ($i = 0; $i < 4; $i++)
                <div class="flex items-center gap-4">
                    <div
                        class="flex h-[52px] w-[500px] items-center rounded-full border border-[#EEEEEE] p-[14px_16px] focus-within:border-2 focus-within:border-[#0A090B]">
                        <div class="mr-[14px] flex h-6 w-6 items-center justify-center overflow-hidden">
                            <img src="{{ asset('/images/icons/edit.svg') }}" class="h-full w-full object-contain"
                                alt="icon">
                        </div>
                        <input type="text"
                            class="w-full font-semibold outline-none placeholder:font-normal placeholder:text-[#7F8190]"
                            placeholder="Write better answer option" name="answers[]">
                    </div>
                    <label class="flex items-center gap-[10px] font-semibold"><input type="radio"
                            value="{{ $i }}" name="correct_answer"
                            class="h-[24px] w-[24px] appearance-none rounded-full ring ring-[#EEEEEE] checked:border-[3px] checked:border-solid checked:border-white checked:bg-[#2B82FE]" />
                        Correct
                    </label>
                </div>
            @endfor

        </div>
        <button type="submit"
            class="h-[52px] w-[500px] rounded-full bg-[#6436F1] p-[14px_20px] text-center font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Save
            Question</button>
    </form>

    {{-- ### --}}

@endsection
