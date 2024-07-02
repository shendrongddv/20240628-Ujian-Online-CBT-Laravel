@extends('layouts.main-layout')

@section('content')
    {{-- ### --}}

    <div class="mt-5 flex flex-col gap-10 px-5">
        <div class="breadcrumb flex items-center gap-[30px]">
            <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Home</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="{{ route('dashboard.learning.index') }}" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">My
                Courses</a>
            <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
            <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Rapport Details</a>
        </div>
    </div>
    <div class="header ml-[70px] mt-10 flex w-[940px] items-center justify-between pr-[70px]">
        <div class="flex items-center gap-6">
            <div class="relative flex h-[150px] w-[150px] shrink-0 overflow-hidden">
                <img src="{{ asset('/images/thumbnail/Web-Development.png') }}" class="h-full w-full object-contain"
                    alt="icon">
                <p
                    class="text-nowrap absolute bottom-0 left-1/2 -translate-x-1/2 transform rounded-full bg-[#FFF2E6] p-[8px_16px] text-sm font-bold text-[#F6770B]">
                    Product Design</p>
            </div>
            <div class="flex flex-col gap-5">
                <h1 class="text-[30px] font-extrabold leading-[45px]">Digital Marketing 101</h1>
                <div class="flex items-center">
                    <div class="flex items-center gap-[10px]">
                        <div class="flex h-6 w-6 shrink-0">
                            <img src="{{ asset('/images/icons/note-text.svg') }}" alt="icon">
                        </div>
                        <p class="font-semibold">{{ $correctAnswersCount }} of {{ $totalQuestions }} correct</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center">
            @if ($passed)
                <p
                    class="mr-[10px] rounded-[10px] bg-[#06BC65] p-[16px_20px] text-lg font-bold text-white outline-dashed outline-[3px] outline-offset-[7px] outline-[#06BC65]">
                    Passed</p>
            @else
                <p
                    class="mr-[10px] rounded-[10px] bg-[#FD445E] p-[16px_20px] text-lg font-bold text-white outline-dashed outline-[3px] outline-offset-[7px] outline-[#FD445E]">
                    Not Passed</p>
            @endif

        </div>
    </div>
    <div class="result mx-[70px] mt-[30px] flex w-[870px] flex-col gap-5">

        @forelse ($studentAnswers as $answer)
            <div class="question-card flex w-full items-center justify-between rounded-[20px] border border-[#EEEEEE] p-4">
                <div class="flex flex-col gap-[6px]">
                    <p class="text-[#7F8190]">Question</p>
                    <p class="text-xl font-bold">{{ $answer->question->question }}</p>
                </div>

                @if ($answer->answer == 'correct')
                    <div class="flex items-center gap-[14px]">
                        <p class="rounded-full bg-[#06BC65] p-[8px_20px] text-sm font-semibold text-white">
                            {{ $answer->answer }}</p>
                    </div>
                @else
                    <div class="flex items-center gap-[14px]">
                        <p class="rounded-full bg-[#FD445E] p-[8px_20px] text-sm font-semibold text-white">
                            {{ $answer->answer }}</p>
                    </div>
                @endif
            </div>
        @empty
            <p>Belum ada jawaban.</p>
        @endforelse
    </div>
    <div class="options mx-[70px] mt-[30px] flex items-center gap-5">
        <a href=""
            class="h-[52px] w-fit rounded-full bg-[#0A090B] p-[14px_20px] text-center font-semibold text-white transition-all duration-300">Request
            Retake</a>
        <a href=""
            class="h-[52px] w-fit rounded-full bg-[#6436F1] p-[14px_20px] text-center font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Contact
            Teacher</a>
    </div>

    {{-- ### --}}
@endsection
