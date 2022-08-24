@vite('resources/css/app.css')
<div class="flex flex-row   w-full">
        <div class=" w-30 drop-shadow h-screen ">
            @section('admin_sidebar')
            @include('components.admin_sidebar')
            @show
        </div>
        <div class="flex flex-col bg-transparent w-full">
            <div class="h-12 bg-orange-300  p-1">
                @section('admin_header')
                @include('components.admin_header')
                @show
            </div>
            <div class="overflow-auto sticky hover:scroll">
                @yield('content')
            </div>
        </div>    
</div>