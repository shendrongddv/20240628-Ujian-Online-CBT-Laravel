<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Fomts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    {{-- CSS --}}
    <link href="{{ asset('/css/output.css') }}" rel="stylesheet">

</head>

<body class="font-poppins text-[#0A090B]">
    <section id="content">

        {{-- header --}}
        <div class="border-b border-[#EEEEEE]">
            <div class="nav mx-auto flex h-[92px] w-full max-w-[1280px] items-center justify-between p-5">
                <div class="flex items-center gap-4">
                    {{-- <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                        <img src="assets/images/thumbnail/Digital-Marketing-101.png" class="object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="text-lg font-bold">Digital Marketing 101</p>
                        <p class="text-sm text-[#7F8190]">Beginners</p>
                    </div> --}}
                </div>

                {{-- account --}}
                <div class="flex items-center gap-3">
                    <div class="flex flex-col text-right">
                        <p class="text-sm text-[#7F8190]">Hallo</p>
                        <p class="font-semibold">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="h-[46px] w-[46px]">
                        <img src="{{ asset('/images/photos/default-photo.svg') }}" alt="photo">
                    </div>
                </div>
                {{-- account --}}

            </div>
        </div>
        {{-- header --}}

        @yield('content')

        {{-- content --}}
        {{-- <form class="learning mt-[50px] flex w-full flex-col items-center gap-[50px] pb-[30px]">
            <h1 class="w-[821px] text-center text-[46px] font-extrabold leading-[69px]">
                What is the primary focus on User Experience (UX) Design?
            </h1>
            <div class="flex w-full max-w-[750px] flex-col gap-[30px]">
                <label for="a"
                    class="has-[:checked]:border-2 has-[:checked]:border-[#0A090B] group flex w-full items-center justify-between gap-[14px] rounded-full border border-[#EEEEEE] p-[18px_20px] transition-all duration-300">
                    <div class="flex items-center gap-[14px]">
                        <img src="assets/images/icons/arrow-circle-right.svg" alt="icon">
                        <span class="text-xl font-semibold leading-[30px]">Enhancing product aesthetics</span>
                    </div>
                    <div class="group-has-[:checked]:block hidden">
                        <img src="assets/images/icons/tick-circle.svg" alt="icon">
                    </div>
                    <input type="radio" name="answer" id="a" class="hidden">
                </label>
                <label for="b"
                    class="has-[:checked]:border-2 has-[:checked]:border-[#0A090B] group flex w-full items-center justify-between gap-[14px] rounded-full border border-[#EEEEEE] p-[18px_20px] transition-all duration-300">
                    <div class="flex items-center gap-[14px]">
                        <img src="assets/images/icons/arrow-circle-right.svg" alt="icon">
                        <span class="text-xl font-semibold leading-[30px]">Maximizing the speed of a website</span>
                    </div>
                    <div class="group-has-[:checked]:block hidden">
                        <img src="assets/images/icons/tick-circle.svg" alt="icon">
                    </div>
                    <input type="radio" name="answer" id="b" class="hidden">
                </label>
                <label for="c"
                    class="has-[:checked]:border-2 has-[:checked]:border-[#0A090B] group flex w-full items-center justify-between gap-[14px] rounded-full border border-[#EEEEEE] p-[18px_20px] transition-all duration-300">
                    <div class="flex items-center gap-[14px]">
                        <img src="assets/images/icons/arrow-circle-right.svg" alt="icon">
                        <span class="text-xl font-semibold leading-[30px]">Improving user satisfaction through usability
                            and access</span>
                    </div>
                    <div class="group-has-[:checked]:block hidden">
                        <img src="assets/images/icons/tick-circle.svg" alt="icon">
                    </div>
                    <input type="radio" name="answer" id="c" class="hidden">
                </label>
                <label for="d"
                    class="has-[:checked]:border-2 has-[:checked]:border-[#0A090B] group flex w-full items-center justify-between gap-[14px] rounded-full border border-[#EEEEEE] p-[18px_20px] transition-all duration-300">
                    <div class="flex items-center gap-[14px]">
                        <img src="assets/images/icons/arrow-circle-right.svg" alt="icon">
                        <span class="text-xl font-semibold leading-[30px]">Increasing the number of features in a
                            product</span>
                    </div>
                    <div class="group-has-[:checked]:block hidden">
                        <img src="assets/images/icons/tick-circle.svg" alt="icon">
                    </div>
                    <input type="radio" name="answer" id="d" class="hidden">
                </label>
            </div>
            <a href="learning-finished.html"
                class="w-fit rounded-full bg-[#6436F1] p-[14px_40px] text-center align-middle text-sm font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Save
                & Next Question</a>
        </form> --}}
        {{-- content --}}

    </section>

</body>

</html>
