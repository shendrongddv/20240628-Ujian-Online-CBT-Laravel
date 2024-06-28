<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/output.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body class="font-poppins text-[#0A090B]">
    <section id="content" class="flex">
        <div id="sidebar"
            class="flex min-h-screen w-[270px] shrink-0 flex-col justify-between border-r border-[#EEEEEE] bg-[#FBFBFB] p-[30px]">
            <div class="flex w-full flex-col gap-[30px]">
                <a href="index.html" class="flex items-center justify-center">
                    <img src="{{ asset('/images/logo/logo.svg') }}" alt="logo">
                </a>
                <ul class="flex flex-col gap-3">
                    <li>
                        <h3 class="text-xs font-bold text-[#A5ABB2]">DAILY USE</h3>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/home-hashtag.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Overview</p>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full bg-[#2B82FE] p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/note-favorite.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold text-white transition-all duration-300 hover:text-white">Courses</p>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/profile-2user.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Students</p>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/sms-tracking.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Messages</p>
                            <div
                                class="notif flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#F6770B]">
                                <p class="text-[10px] font-bold leading-[15px] text-white">12</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/chart-2.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Analytics</p>
                        </a>
                    </li>
                </ul>
                <ul class="flex flex-col gap-3">
                    <li>
                        <h3 class="text-xs font-bold text-[#A5ABB2]">OTHERS</h3>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/3dcube.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Rewards</p>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/code.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">A.I Plugins</p>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/setting-2.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Settings</p>
                        </a>
                    </li>
                    <li>
                        <a href="signin.html"
                            class="flex h-11 items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                            <div>
                                <img src="{{ asset('/images/icons/security-safe.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold transition-all duration-300 hover:text-white">Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="">
                <div class="mt-[30px] flex w-full items-center gap-3 rounded-[14px] bg-[#0A090B] p-4">
                    <div>
                        <img src="{{ asset('/images/icons/crown-round-bg.svg') }}" alt="icon">
                    </div>
                    <div class="flex flex-col gap-[2px]">
                        <p class="font-semibold text-white">Get Pro</p>
                        <p class="text-sm leading-[21px] text-[#A0A0A0]">Unlock features</p>
                    </div>
                </div>
            </a>
        </div>
        <div id="menu-content" class="flex w-full flex-col pb-[30px]">
            <div class="nav flex justify-between border-b border-[#EEEEEE] p-5">
                <form
                    class="search flex h-[52px] w-[400px] items-center rounded-full border border-[#EEEEEE] p-[10px_16px]">
                    <input type="text"
                        class="w-full font-semibold outline-none placeholder:font-normal placeholder:text-[#7F8190]"
                        placeholder="Search by report, student, etc" name="search">
                    <button type="submit" class="ml-[10px] flex h-8 w-8 items-center justify-center">
                        <img src="{{ asset('/images/icons/search.svg') }}" alt="icon">
                    </button>
                </form>
                <div class="flex items-center gap-[30px]">
                    <div class="flex gap-[14px]">
                        <a href=""
                            class="flex h-[46px] w-[46px] shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                            <img src="{{ asset('/images/icons/receipt-text.svg') }}" alt="icon">
                        </a>
                        <a href=""
                            class="flex h-[46px] w-[46px] shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                            <img src="{{ asset('/images/icons/notification.svg') }}" alt="icon">
                        </a>
                    </div>
                    <div class="flex h-[46px] w-[1px] shrink-0 border border-[#EEEEEE]"></div>
                    <div class="flex items-center gap-3">
                        <div class="flex flex-col text-right">
                            <p class="text-sm text-[#7F8190]">Howdy</p>
                            <p class="font-semibold">Fany Alqo</p>
                        </div>
                        <div class="h-[46px] w-[46px]">
                            <img src="{{ asset('/images/photos/default-photo.svg') }}" alt="photo">
                        </div>
                    </div>
                </div>
            </div>
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
                        <img src="{{ Storage::url($course->cover) }}" class="h-full w-full object-contain"
                            alt="icon">
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

            <form method="POST" action="{{ route('dashboard.course_question.update', $courseQuestion) }}"
                id="add-question" class="mx-[70px] mt-[30px] flex flex-col gap-5">
                @csrf

                <h2 class="text-2xl font-bold">Add New Question</h2>
                <div class="flex flex-col gap-[10px]">
                    <p class="font-semibold">Question</p>
                    <div
                        class="flex h-[52px] w-[500px] items-center rounded-full border border-[#EEEEEE] p-[14px_16px] focus-within:border-2 focus-within:border-[#0A090B]">
                        <div class="mr-[14px] flex h-6 w-6 items-center justify-center overflow-hidden">
                            <img src="{{ asset('/images/icons/note-text.svg') }}"
                                class="h-full w-full object-contain" alt="icon">
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
                                    <img src="{{ asset('/images/icons/edit.svg') }}"
                                        class="h-full w-full object-contain" alt="icon">
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

        </div>
    </section>

</body>

</html>
