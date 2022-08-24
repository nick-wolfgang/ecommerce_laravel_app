@vite('resources/css/app.css')

<div class=" flex flex-row items-center justify-between">
    <div class="flex flex-column">
        <a href="{{ route('products.index') }}" class="font-body text-white text-2xl ml-4 cursor-pointer">
            <h3>Shoppy<span class="text-orange-500">.me</span></h3>
        </a>
    </div>
    <div class="flex flex-row items-center">
        <div class="">
            
        </div>
        <div class="flex items-center ">
            <input type="text" name="name" id="name" class="h-8 mt-2 w-full
                appearance-none-none block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  
                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                 placeholder="Search products"
            >
            <img src="{{asset('images/search-icons.png')}}" alt="search-icon" class="w-10 h-8 mt-2 cursor-pointer">
        </div>
    </div>
    <div class="flex flex-row">
        <div class="mx-8 flex flex-row items-center border border-white my-2 cursor-pointer hover:border-2 relative">
            <span class="text-white p-2">Basket</span>
            <img src="{{asset('images/basket5.png')}}" alt="basket" class="w-10 h-10">
        </div>
        <div class="mr-2 p-2">
            @if (Auth::check())
                <a href="{{ route('profile.index') }}">
                    <img class="h-10 z-0 m-0 p-0" src="{{asset('images/avatar2.jpg')}}" alt="">
                </a>
            @else
                <a href="{{ route('auth.getLogin') }}">
                    <img class="h-10 z-0 m-0 p-0" src="{{asset('images/avatar2.jpg')}}" alt="">
                </a>
            @endif
            <div class="flex items-end items-center">
                <h1 class=" text-sm text-white font-bold w-auto">
                    @if (Auth::check())
                        <a href="{{ route('profile.index') }}"> {{Auth::user()->name}} </a>
                    @else
                        Guest User
                    @endif
                </h1>
                {{-- <div class="h-3 w-3 bg-green-500 rounded-full mr-4 z-10 border-2 border-gray-100"></div> --}}
                <span class="flex h-3 w-3 justify-between">
                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75"></span>
                    <span class=" relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
            </div>
        </div>
    </div>
</div>
</div>