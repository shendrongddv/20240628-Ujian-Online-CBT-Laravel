@extends('layouts.main-layout')

@section('content')

    {{-- ### --}}

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

    <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.courses.update', $course) }}"
        class="mx-[70px] mt-10 flex w-[500px] flex-col gap-[30px]">
        @csrf
        @method('PUT')
        <div class="flex items-center gap-5">
            <input type="file" name="cover" id="icon" class="peer hidden" onchange="previewFile()"
                data-empty="true">
            <div
                class="relative h-[100px] w-[100px] overflow-hidden rounded-full peer-data-[empty=true]:border-[3px] peer-data-[empty=true]:border-dashed peer-data-[empty=true]:border-[#EEEEEE]">
                <div class="file-preview relative z-10 h-full w-full">
                    <img src="{{ Storage::url($course->cover) }}" class="thumbnail-icon h-full w-full object-cover"
                        alt="thumbnail">
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
                    <img src="{{ asset('/images/icons/note-favorite-outline.svg') }}" class="h-full w-full object-contain"
                        alt="icon">
                </div>
                <input value="{{ $course->name }}" type="text"
                    class="w-full font-semibold outline-none placeholder:font-normal placeholder:text-[#7F8190]"
                    placeholder="Write your better course name" name="name" required>
            </div>
        </div>
        <div class="group/category flex flex-col gap-[10px]">
            <p class="font-semibold">Category</p>
            <div
                class="peer flex items-center rounded-full border border-[#EEEEEE] p-[12px_16px] transition-all duration-300 focus-within:border-2 focus-within:border-[#0A090B]">
                <div class="mr-[10px] flex h-6 w-6 items-center justify-center overflow-hidden">
                    <img src="{{ asset('/images/icons/bill.svg') }}" class="h-full w-full object-contain" alt="icon">
                </div>
                <select id="category"
                    class="w-full appearance-none bg-[url('assets/images/icons/arrow-down.svg')] bg-right bg-no-repeat pl-1 font-semibold text-[#0A090B] invalid:font-normal invalid:text-[#7F8190] focus:outline-none"
                    name="category_id" required>
                    <option value="{{ $course->category->id }}" selected>{{ $course->category->name }}
                    </option>
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
                        <img src="{{ asset('/images/icons/onboarding.svg') }}" class="h-full w-full" alt="icon">
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
                        <img src="{{ asset('/images/icons/module.svg') }}" class="h-full w-full" alt="icon">
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
                        <img src="{{ asset('/images/icons/job.svg') }}" class="h-full w-full" alt="icon">
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
                        <img src="{{ asset('/images/icons/clock.svg') }}" class="h-full w-full" alt="icon">
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
                        <img src="{{ asset('/images/icons/calendar-add-disabled.svg') }}" class="h-full w-full"
                            alt="icon">
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
                    <img src="{{ asset('/images/icons/security-user.svg') }}" class="h-full w-full object-contain"
                        alt="icon">
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

    {{-- ### --}}

@endsection
