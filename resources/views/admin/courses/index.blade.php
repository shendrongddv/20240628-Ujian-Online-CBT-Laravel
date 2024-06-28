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
                            <p class="font-semibold">{{ auth()->user()->name }}</p>
                        </div>
                        <div class="h-[46px] w-[46px]">
                            <img src="{{ asset('/images/photos/default-photo.svg') }}" alt="photo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 flex flex-col px-5">
                <div class="flex w-full items-center justify-between">
                    <div class="flex flex-col gap-1">
                        <p class="text-[30px] font-extrabold leading-[45px]">Manage Course</p>
                        <p class="text-[#7F8190]">Provide high quality for best students</p>
                    </div>
                    <a href="{{ route('dashboard.courses.create') }}"
                        class="h-[52px] rounded-full bg-[#6436F1] p-[14px_20px] font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Add
                        New Course</a>
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

                @forelse ($courses as $course)
                    <div class="list-items flex flex-nowrap justify-between pr-10">
                        <div class="flex w-[300px] shrink-0">
                            <div class="flex items-center gap-4">
                                <div class="flex h-16 w-16 shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ Storage::url($course->cover) }}" class="object-cover"
                                        alt="thumbnail">
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
                            <div class="relative h-[41px]">
                                <div
                                    class="menu-dropdown absolute top-0 flex max-h-[41px] w-[120px] flex-col gap-3 overflow-hidden rounded-[18px] border border-[#EEEEEE] bg-white p-[10px_16px] transition-all duration-300 hover:shadow-[0_10px_16px_0_#0A090B0D]">
                                    <button onclick="toggleMaxHeight(this)"
                                        class="flex w-full items-center justify-between text-sm font-bold">
                                        menu
                                        <img src="{{ asset('/images/icons/arrow-down.svg') }}" alt="icon">
                                    </button>
                                    <a href="{{ route('dashboard.courses.show', $course) }}"
                                        class="flex w-full items-center justify-between text-sm font-bold">
                                        Manage
                                    </a>
                                    <a href="course-students.html"
                                        class="flex w-full items-center justify-between text-sm font-bold">
                                        Students
                                    </a>
                                    <a href="{{ route('dashboard.courses.edit', $course) }}"
                                        class="flex w-full items-center justify-between text-sm font-bold">
                                        Edit Course
                                    </a>
                                    <form method="POST" action="{{ route('dashboard.courses.destroy', $course) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex w-full items-center justify-between text-sm font-bold text-[#FD445E]">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
            {{-- <div id="pagiantion" class="mt-[37px] flex items-center gap-4 px-5">
                <button
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-[#EEEEEE] font-semibold text-[#7F8190] transition-all duration-300 hover:bg-[#0A090B] hover:text-white">1</button>
                <button
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-[#EEEEEE] font-semibold text-[#7F8190] transition-all duration-300 hover:bg-[#0A090B] hover:text-white">2</button>
                <button
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-[#EEEEEE] bg-[#0A090B] font-semibold text-white transition-all duration-300 hover:bg-[#0A090B] hover:text-white">3</button>
                <button
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-[#EEEEEE] font-semibold text-[#7F8190] transition-all duration-300 hover:bg-[#0A090B] hover:text-white">4</button>
                <button
                    class="flex h-10 w-10 items-center justify-center rounded-full border border-[#EEEEEE] font-semibold text-[#7F8190] transition-all duration-300 hover:bg-[#0A090B] hover:text-white">5</button>
            </div> --}}
        </div>
    </section>

    <script>
        function toggleMaxHeight(button) {
            const menuDropdown = button.parentElement;
            menuDropdown.classList.toggle('max-h-fit');
            menuDropdown.classList.toggle('shadow-[0_10px_16px_0_#0A090B0D]');
            menuDropdown.classList.toggle('z-10');
        }

        document.addEventListener('click', function(event) {
            const menuDropdowns = document.querySelectorAll('.menu-dropdown');
            const clickedInsideDropdown = Array.from(menuDropdowns).some(function(dropdown) {
                return dropdown.contains(event.target);
            });

            if (!clickedInsideDropdown) {
                menuDropdowns.forEach(function(dropdown) {
                    dropdown.classList.remove('max-h-fit');
                    dropdown.classList.remove('shadow-[0_10px_16px_0_#0A090B0D]');
                    dropdown.classList.remove('z-10');
                });
            }
        });
    </script>
</body>

</html>
