@extends('layouts.main-layout')

@section('content')
    {{-- ### --}}

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
                <img src="{{ Storage::url($course->cover) }}" class="h-full w-full object-contain" alt="icon">
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
                <a href="{{ route('dashboard.course.course_student.create', $course) }}"
                    class="flex items-center gap-[10px]">
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
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.08325 4.14163L7.26659 3.04996C7.39992 2.25829 7.49992 1.66663 8.90825 1.66663H11.0916C12.4999 1.66663 12.6083 2.29163 12.7333 3.05829L12.9166 4.14163"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M15.7084 7.6167L15.1667 16.0084C15.0751 17.3167 15.0001 18.3334 12.6751 18.3334H7.32508C5.00008 18.3334 4.92508 17.3167 4.83341 16.0084L4.29175 7.6167"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.6084 13.75H11.3834" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.91675 10.4166H12.0834" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
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
                        <form method="POST" action="{{ route('dashboard.course_questions.destroy', $question) }}">
                            @csrf
                            @method('DELETE')
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

    {{-- ### --}}
@endsection
