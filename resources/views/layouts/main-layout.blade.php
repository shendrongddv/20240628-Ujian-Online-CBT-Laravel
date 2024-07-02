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
    <section id="content" class="flex">

        {{-- sidebar --}}
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
                        <a href="{{ route('dashboard.courses.index') }}"
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
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button href="signin.html"
                                class="flex h-11 w-full items-center gap-[14px] rounded-full p-[10px_16px] transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{ asset('/images/icons/security-safe.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Logout</p>
                            </button>
                        </form>
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
        {{-- sidebar --}}

        <div id="menu-content" class="flex w-full flex-col pb-[30px]">
            <div class="nav flex justify-between border-b border-[#EEEEEE] p-5">

                {{-- search --}}
                <form
                    class="search flex h-[52px] w-[400px] items-center rounded-full border border-[#EEEEEE] p-[10px_16px]">
                    <input type="text"
                        class="w-full font-semibold outline-none placeholder:font-normal placeholder:text-[#7F8190]"
                        placeholder="Search by report, student, etc" name="search">
                    <button type="submit" class="ml-[10px] flex h-8 w-8 items-center justify-center">
                        <img src="{{ asset('/images/icons/search.svg') }}" alt="icon">
                    </button>
                </form>
                {{-- search --}}

                {{-- profile --}}
                <div class="flex items-center gap-[30px]">
                    {{-- <div class="flex gap-[14px]">
                        <a href=""
                            class="flex h-[46px] w-[46px] shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                            <img src="{{ asset('/images/icons/receipt-text.svg') }}" alt="icon">
                        </a>
                        <a href=""
                            class="flex h-[46px] w-[46px] shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                            <img src="{{ asset('/images/icons/notification.svg') }}" alt="icon">
                        </a>
                    </div>
                    <div class="flex h-[46px] w-[1px] shrink-0 border border-[#EEEEEE]"></div> --}}
                    <div class="flex items-center gap-3">
                        <div class="flex flex-col text-right">
                            <p class="text-sm text-[#7F8190]">Hallo</p>
                            <p class="font-semibold">{{ auth()->user()->name }}</p>
                        </div>
                        <div class="h-[46px] w-[46px]">
                            <img src="{{ asset('/images/photos/default-photo.svg') }}" alt="photo">
                        </div>
                    </div>
                </div>
                {{-- profile --}}

            </div>

            @yield('content')

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
