@vite('resources/css/app.css')

<div class="flex flex-row sticky">
    <div class="h-screen w-64 bg-sky-800">
        @section('user_sidebar')
        @include('components.user_sidebar')
        @show
    </div>
    <div class="flex flex-col ">
        <div class="h-12 bg-orange-300 w-screen p-1">
            @section('user_header')
            @include('components.user_header')
            @show
        </div>
        <div class="p-2">
            @yield('content')
        </div>
    </div>
</div>