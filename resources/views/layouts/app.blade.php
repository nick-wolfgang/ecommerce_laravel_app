@vite('resources/css/app.css')
<div class="">
    <div class="h-13 bg-sky-800 sticky top-0 drop-shadow">
        @section('header')
        @include('components.header')
        @show
    </div>
    <div>
        @yield('content')
    </div>
    <div class="bg-sky-800 mb-0">
        @section('footer')
        @include('components.footer')
        @show
    </div>
</div>