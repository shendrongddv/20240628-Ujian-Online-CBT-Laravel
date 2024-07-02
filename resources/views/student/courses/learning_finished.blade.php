<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css//output.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body class="font-poppins text-[#0A090B]">
    <section id="content">
        <div class="border-b border-[#EEEEEE]">
            <div class="nav mx-auto flex h-[92px] w-full max-w-[1280px] items-center justify-between p-5">
                <div class="flex items-center gap-4">
                    <div class="flex h-[50px] w-[50px] shrink-0 overflow-hidden rounded-full">
                        <img src="{{ asset('/images/thumbnail/Digital-Marketing-101.png') }}" class="object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="text-lg font-bold">Digital Marketing 101</p>
                        <p class="text-sm text-[#7F8190]">Beginners</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="flex flex-col text-right">
                        <p class="text-sm text-[#7F8190]">Howdy</p>
                        <p class="font-semibold">Bondan Poro</p>
                    </div>
                    <div class="h-[46px] w-[46px]">
                        <img src="{{ asset('/images/photos/default-photo.svg') }}" alt="photo">
                    </div>
                </div>
            </div>
        </div>
        <div class="finished mb-[30px] mt-[120px] flex w-full flex-col items-center justify-center gap-[40px]">
            <div class="flex h-[200px] w-[200px] shrink-0 overflow-hidden">
                <img src="{{ asset('/images/thumbnail/Web-Development-big.png') }}" class="h-full w-full object-contain"
                    alt="icon">
            </div>
            <div class="flex flex-col justify-center gap-[6px] text-center">
                <h1 class="text-2xl font-bold">Congratulations! <br>You Have Finished Test</h1>
                <p class="w-[374px] text-[#7F8190]">Hopefully you will get a better result to prepare your great future
                    career soon enough</p>
            </div>
            <a href="{{ route('dashboard.learning.rapport.course', $course) }}"
                class="w-fit rounded-full bg-[#6436F1] p-[14px_30px] text-center align-middle text-sm font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">View
                Test Result</a>
        </div>
    </section>

</body>

</html>
