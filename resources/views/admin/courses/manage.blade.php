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
                        class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Manage
                        Courses</a>
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
                                <p class="font-semibold">
                                    {{ count($students) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a href="#" id="more-button"
                        class="toggle-button flex h-[46px] w-[46px] shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                        <img src="{{ asset('/images/icons/more.svg') }}" alt="icon">
                    </a>
                    <div
                        class="dropdown-menu absolute right-0 top-[66px] flex hidden w-[270px] flex-col gap-4 rounded-[18px] border border-[#EEEEEE] bg-white p-5 shadow-[0_10px_16px_0_#0A090B0D] transition-all duration-300">
                        <a href="" class="flex items-center gap-[10px]">
                            <div class="h-5 w-5">
                                <img src="{{ asset('/images/icons/profile-2user-outline.svg') }}" alt="icon">
                            </div>
                            <span class="text-sm font-semibold">Add Students</span>
                        </a>
                        <a href="" class="flex items-center gap-[10px]">
                            <div class="h-5 w-5">
                                <img src="{{ asset('/images/icons/note-favorite-outline.svg') }}" alt="icon">
                            </div>
                            <span class="text-sm font-semibold">Edit Course Details</span>
                        </a>
                        <a href="" class="flex items-center gap-[10px]">
                            <div class="h-5 w-5">
                                <img src="{{ asset('/images/icons/crown-outline.svg') }}" alt="icon">
                            </div>
                            <span class="text-sm font-semibold">Upload Certificate</span>
                        </a>
                        <a href="" class="flex items-center gap-[10px] text-[#FD445E]">
                            <div class="h-5 w-5">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5 4.98332C14.725 4.70832 11.9333 4.56665 9.15 4.56665C7.5 4.56665 5.85 4.64998 4.2 4.81665L2.5 4.98332"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7.08325 4.14163L7.26659 3.04996C7.39992 2.25829 7.49992 1.66663 8.90825 1.66663H11.0916C12.4999 1.66663 12.6083 2.29163 12.7333 3.05829L12.9166 4.14163"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.7084 7.6167L15.1667 16.0084C15.0751 17.3167 15.0001 18.3334 12.6751 18.3334H7.32508C5.00008 18.3334 4.92508 17.3167 4.83341 16.0084L4.29175 7.6167"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8.6084 13.75H11.3834" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.91675 10.4166H12.0834" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="text-sm font-semibold">Delete Course</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="course-test" class="mx-[70px] mt-[30px] w-[870px]">
                <h2 class="text-2xl font-bold">Course Tests</h2>
                <div class="mt-2 flex flex-col gap-[30px]">
                    <a href="{{ route('dashboard.course.create.question', $course) }}"
                        class="flex h-[92px] w-full items-center justify-center rounded-[20px] border-2 border-dashed border-[#0A090B] p-4">
                        <div class="flex items-center gap-5">
                            <div>
                                <img src="{{ asset('/images/icons/note-add.svg') }}" alt="icon">
                            </div>
                            <p class="text-xl font-bold">New Question</p>
                        </div>
                    </a>
                    @forelse ($questions as $question)
                        <div
                            class="question-card flex w-full items-center justify-between rounded-[20px] border border-[#EEEEEE] p-4">
                            <div class="flex flex-col gap-[6px]">
                                <p class="text-[#7F8190]">Question</p>
                                <p class="text-xl font-bold">{{ $question->question }}</p>
                            </div>
                            <div class="flex items-center gap-[14px]">
                                <a href="{{ route('dashboard.course_questions.edit', $question) }}"
                                    class="rounded-full bg-[#0A090B] p-[14px_30px] font-semibold text-white">Edit</a>
                                <form action="">
                                    <button
                                        class="flex h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-[#FD445E]">
                                        <img src="{{ asset('/images/icons/trash.svg') }}" alt="icon">
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>
                            Kelas belum memiliki sebuat test.
                        </p>
                    @endforelse

                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('more-button');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            menuButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event
                    .target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>

</body>

</html>
