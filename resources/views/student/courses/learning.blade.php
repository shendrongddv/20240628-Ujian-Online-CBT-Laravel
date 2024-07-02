@extends('layouts.learning-layout')

@section('content')
    {{-- ### --}}

    <form
        action="{{ route('dashboard.learning.course.answer.store', ['course' => $course->id, 'question' => $question->id]) }}"
        method="POST" class="learning mt-[50px] flex w-full flex-col items-center gap-[50px] pb-[30px]">
        @csrf

        <h1 class="w-[821px] text-center text-[46px] font-extrabold leading-[69px]">
            {{ $question->question }}
        </h1>
        <div class="flex w-full max-w-[750px] flex-col gap-[30px]">

            @foreach ($question->answers as $answer)
                <label for="{{ $answer->id }}"
                    class="has-[:checked]:border-2 has-[:checked]:border-[#0A090B] group flex w-full items-center justify-between gap-[14px] rounded-full border border-[#EEEEEE] p-[18px_20px] transition-all duration-300">
                    <div class="flex items-center gap-[14px]">
                        <img src="{{ asset('/images/icons/arrow-circle-right.svg') }}" alt="icon">
                        <span class="text-xl font-semibold leading-[30px]">{{ $answer->answer }}</span>
                    </div>
                    <div class="group-has-[:checked]:block hidden">
                        <img src="{{ asset('/images/icons/tick-circle.svg') }}" alt="icon">
                    </div>
                    <input type="radio" name="answer_id" id="{{ $answer->id }}" value="{{ $answer->id }}"
                        class="hidden">
                </label>
            @endforeach

        </div>
        <button type="submit"
            class="w-fit rounded-full bg-[#6436F1] p-[14px_40px] text-center align-middle text-sm font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Save
            & Next Question</button>
    </form>

    {{-- ### --}}
@endsection
