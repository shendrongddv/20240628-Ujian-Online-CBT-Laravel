<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
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
                    <a href="index.html" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">Manage
                        Courses</a>
                    <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
                    <a href="#" class="text-[#7F8190] last:font-semibold last:text-[#0A090B]">New Course</a>
                </div>
            </div>
            <div class="header mt-5 flex flex-col gap-1 px-5">
                <h1 class="text-[30px] font-extrabold leading-[45px]">New Course</h1>
                <p class="text-[#7F8190]">Provide high quality for best students</p>
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

            <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.courses.store') }}"
                class="mx-[70px] mt-10 flex w-[500px] flex-col gap-[30px]">
                @csrf
                <div class="flex items-center gap-5">
                    <input type="file" name="cover" id="icon" class="peer hidden"
                        onchange="previewFile()" data-empty="true" required>
                    <div
                        class="relative h-[100px] w-[100px] overflow-hidden rounded-full peer-data-[empty=true]:border-[3px] peer-data-[empty=true]:border-dashed peer-data-[empty=true]:border-[#EEEEEE]">
                        <div class="file-preview relative z-10 hidden h-full w-full">
                            <img src="" class="thumbnail-icon h-full w-full object-cover" alt="thumbnail">
                        </div>
                        <span
                            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform text-center text-sm font-semibold text-[#7F8190]">Icon
                            <br>Course</span>
                    </div>
                    <button type="button"
                        class="flex h-fit shrink-0 items-center rounded-full bg-[#0A090B] p-[8px_20px] font-semibold text-white"
                        onclick="document.getElementById('icon').click()">
                        Add Icon
                    </button>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="font-semibold">Course Name</p>
                    <div
                        class="flex h-[52px] w-[500px] items-center rounded-full border border-[#EEEEEE] p-[14px_16px] transition-all duration-300 focus-within:border-2 focus-within:border-[#0A090B]">
                        <div class="mr-[14px] flex h-6 w-6 items-center justify-center overflow-hidden">
                            <img src="{{ asset('/images/icons/note-favorite-outline.svg') }}"
                                class="h-full w-full object-contain" alt="icon">
                        </div>
                        <input type="text"
                            class="w-full font-semibold outline-none placeholder:font-normal placeholder:text-[#7F8190]"
                            placeholder="Write your better course name" name="name" required>
                    </div>
                </div>
                <div class="group/category flex flex-col gap-[10px]">
                    <p class="font-semibold">Category</p>
                    <div
                        class="peer flex items-center rounded-full border border-[#EEEEEE] p-[12px_16px] transition-all duration-300 focus-within:border-2 focus-within:border-[#0A090B]">
                        <div class="mr-[10px] flex h-6 w-6 items-center justify-center overflow-hidden">
                            <img src="{{ asset('/images/icons/bill.svg') }}" class="h-full w-full object-contain"
                                alt="icon">
                        </div>
                        <select id="category"
                            class="w-full appearance-none bg-[url('assets/images/icons/arrow-down.svg')] bg-right bg-no-repeat pl-1 font-semibold text-[#0A090B] invalid:font-normal invalid:text-[#7F8190] focus:outline-none"
                            name="category_id" required>
                            <option value="" disabled selected hidden>Choose one of category</option>
                            @forelse ($categories as $category)
                                <option value="{{ $category->id }}" class="font-semibold">
                                    {{ $category->name }}
                                </option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="font-semibold">Course Type</p>
                    <div class="flex items-center gap-5">
                        <a href="#"
                            class="group relative flex w-full flex-col items-center gap-5 rounded-[30px] border border-[#EEEEEE] p-[30px_16px] transition-all duration-300 aria-checked:border-2 aria-checked:border-[#0A090B]"
                            data-group="course-type" aria-checked="false" onclick="handleActiveAnchor(this)">
                            <div class="flex h-[70px] w-[70px] shrink-0 overflow-hidden">
                                <img src="{{ asset('/images/icons/onboarding.svg') }}" class="h-full w-full"
                                    alt="icon">
                            </div>
                            <span class="mx-auto text-center font-semibold">Onboarding</span>
                            <div
                                class="absolute right-0 top-[24px] hidden -translate-x-1/2 -translate-y-1/2 transform transition-all duration-300 group-aria-checked:block">
                                <img src="{{ asset('/images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                        </a>
                        <a href="#"
                            class="group relative flex w-full flex-col items-center gap-5 rounded-[30px] border border-[#EEEEEE] p-[30px_16px] transition-all duration-300 aria-checked:border-2 aria-checked:border-[#0A090B]"
                            data-group="course-type" aria-checked="false" onclick="handleActiveAnchor(this)">
                            <div class="flex h-[70px] w-[70px] shrink-0 overflow-hidden">
                                <img src="{{ asset('/images/icons/module.svg') }}" class="h-full w-full"
                                    alt="icon">
                            </div>
                            <span class="mx-auto text-center font-semibold">CBT Module</span>
                            <div
                                class="absolute right-0 top-[24px] hidden -translate-x-1/2 -translate-y-1/2 transform transition-all duration-300 group-aria-checked:block">
                                <img src="{{ asset('/images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                        </a>
                        <a href="#"
                            class="group relative flex w-full flex-col items-center gap-5 rounded-[30px] border border-[#EEEEEE] p-[30px_16px] transition-all duration-300 aria-checked:border-2 aria-checked:border-[#0A090B]"
                            data-group="course-type" aria-checked="false" onclick="handleActiveAnchor(this)">
                            <div class="flex h-[70px] w-[70px] shrink-0 overflow-hidden">
                                <img src="{{ asset('/images/icons/job.svg') }}" class="h-full w-full"
                                    alt="icon">
                            </div>
                            <span class="mx-auto text-center font-semibold">Job-Ready</span>
                            <div
                                class="absolute right-0 top-[24px] hidden -translate-x-1/2 -translate-y-1/2 transform transition-all duration-300 group-aria-checked:block">
                                <img src="{{ asset('/images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="font-semibold">Publish Date</p>
                    <div class="flex items-center gap-[10px]">
                        <a href="#"
                            class="group relative flex w-full items-center gap-[14px] rounded-full border border-[#EEEEEE] p-[14px_16px] transition-all duration-300 aria-checked:border-2 aria-checked:border-[#0A090B]"
                            data-group="publish-date" aria-checked="false" onclick="handleActiveAnchor(this)">
                            <div class="flex h-[24px] w-[24px] shrink-0 overflow-hidden">
                                <img src="{{ asset('/images/icons/clock.svg') }}" class="h-full w-full"
                                    alt="icon">
                            </div>
                            <span class="font-semibold">Active Now</span>
                            <div
                                class="absolute right-0 top-1/2 hidden -translate-x-1/2 -translate-y-1/2 transform transition-all duration-300 group-aria-checked:block">
                                <img src="{{ asset('/images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                        </a>
                        <a href="#"
                            class="group relative flex w-full items-center gap-[14px] rounded-full border border-[#EEEEEE] p-[14px_16px] transition-all duration-300 disabled:border-[#EEEEEE] aria-checked:border-2 aria-checked:border-[#0A090B]"
                            data-group="publish-date" aria-checked="false" onclick="event.preventDefault()" disabled>
                            <div class="flex h-[24px] w-[24px] shrink-0 overflow-hidden">
                                <img src="{{ asset('/images/icons/calendar-add-disabled.svg') }}"
                                    class="h-full w-full" alt="icon">
                            </div>
                            <span class="font-semibold text-[#EEEEEE]">Schedule for Later</span>
                            <div
                                class="absolute right-0 top-1/2 hidden -translate-x-1/2 -translate-y-1/2 transform transition-all duration-300 group-aria-checked:block">
                                <img src="{{ asset('/images/icons/tick-circle.svg') }}" alt="icon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="group/access flex flex-col gap-[10px]">
                    <p class="font-semibold">Access Type</p>
                    <div
                        class="peer flex items-center rounded-full border border-[#EEEEEE] p-[12px_16px] transition-all duration-300 focus-within:border-2 focus-within:border-[#0A090B]">
                        <div class="mr-[10px] flex h-6 w-6 items-center justify-center overflow-hidden">
                            <img src="{{ asset('/images/icons/security-user.svg') }}"
                                class="h-full w-full object-contain" alt="icon">
                        </div>
                        <select id="access"
                            class="w-full appearance-none bg-[url('assets/images/icons/arrow-down.svg')] bg-right bg-no-repeat pl-1 font-semibold text-[#0A090B] invalid:font-normal invalid:text-[#7F8190] focus:outline-none"
                            name="access" required>
                            <option value="" disabled selected hidden>Choose the access type</option>
                            <option value="Invitation Only" class="font-semibold">Invitation Only</option>
                        </select>
                    </div>
                </div>
                <label class="flex items-center gap-[10px] font-semibold"><input type="radio" name="tnc"
                        class="h-[24px] w-[24px] appearance-none rounded-full ring ring-[#EEEEEE] checked:border-[3px] checked:border-solid checked:border-white checked:bg-[#2B82FE]"
                        checked />
                    I have read terms and conditions
                </label>
                <div class="flex items-center gap-5">
                    <a href=""
                        class="h-[52px] w-full rounded-full bg-[#0A090B] p-[14px_20px] text-center font-semibold text-white transition-all duration-300">Add
                        to Draft</a>
                    <button type="submit"
                        class="h-[52px] w-full rounded-full bg-[#6436F1] p-[14px_20px] text-center font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Save
                        Course</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        function previewFile() {
            var preview = document.querySelector('.file-preview');
            var fileInput = document.querySelector('input[type=file]');

            if (fileInput.files.length > 0) {
                var reader = new FileReader();
                var file = fileInput.files[0]; // Get the first file from the input

                reader.onloadend = function() {
                    var img = preview.querySelector('.thumbnail-icon'); // Get the thumbnail image element
                    img.src = reader.result; // Update src attribute with the uploaded file
                    preview.classList.remove('hidden'); // Remove the 'hidden' class to display the preview
                }

                reader.readAsDataURL(file);
                fileInput.setAttribute('data-empty', 'false');
            } else {
                preview.classList.add('hidden'); // Hide preview if no file selected
                fileInput.setAttribute('data-empty', 'true');
            }
        }
    </script>

    <script>
        function handleActiveAnchor(element) {
            event.preventDefault();

            const group = element.getAttribute('data-group');

            // Reset all elements' aria-checked to "false" within the same data-group
            const allElements = document.querySelectorAll(`[data-group="${group}"][aria-checked="true"]`);
            allElements.forEach(el => {
                el.setAttribute('aria-checked', 'false');
            });

            // Set the clicked element's aria-checked to "true"
            element.setAttribute('aria-checked', 'true');
        }
    </script>

</body>

</html>
