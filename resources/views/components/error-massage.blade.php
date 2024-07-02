@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="bg-red-700 px-5 py-5 text-white">
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif
