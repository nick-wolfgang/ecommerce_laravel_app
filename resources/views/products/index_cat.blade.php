@extends('layouts.app')

@section('content')

@vite('resources/css/app.css')

{{-- Second Header --}}
<div class=" flex flex-row w-full bg-gray-400 p-2 justify-between">
    <div class="flex flex-row justify-between items-center">
        <div class="flex flex-row items-center pr-10">
            <img src="{{asset('images/burger.png')}}" alt="burger-menu" class="w-5 h-4 cursor-pointer">
            <span class="pl-2"><strong><a href="{{ route('products.index') }}">All</a></strong></span>
        </div>
        <div class="relative">
            <ul class="flex flex-row">
                <li class="mr-4 border border-indigo-600 p-1 hover:border-indigo-600 hover:border-2 cursor-pointer ">Best Sales</li>
                <li class="p-2 ">
                    @foreach ($category_list as $categori)
                        <a class="text-black hover:text-white mr-4 border border-white p-1 cursor-pointer hover:border-white-600 hover:opacity-85 
                        cursor-pointer" href="{{ route('product.category', ['id' => $categori->id]) }}">{{ $categori->name }}</a>
                    @endforeach
                </li>
                <li class="mr-4 border border-indigo-600 p-1 hover:border-indigo-600 hover:border-2 cursor-pointer ">Musique</li>
                <li class="mr-4 border border-indigo-600 p-1 hover:border-indigo-600 hover:border-2 cursor-pointer ">Flash Sales</li>
                <li class="mr-4 border border-orange-500 p-1 cursor-pointer hover:border-orange-600 hover:border-2 cursor-pointer ">Black Friday</li>
                <li class="mr-4 border border-orange-500 p-1 cursor-pointer hover:border-orange-600 hover:border-2 cursor-pointer">Client Service</li>
            </ul>
        </div>
    </div>
    <div class="mt-2 ml-20 mr-0">
        @if (Auth::check())
            <a href="" class="border border-white text-white p-3 font-semibold">Logout</a>
        @else
            <a href="{{ route('auth.getLogin') }}" class="border border-white text-white p-3 font-semibold">LogIn</a>
        @endif
    </div>
</div>
{{-- <div class="relative">
    <img class="h-1/2 w-full" src="{{ asset('images/bluegraybg.jpg') }}" alt="">
    <div class="text-5xl absolute top-20 left-40 drop-shadow-xl">
        Welcome on <br>
        <div class="font-body text-white cursor-pointer my-2">Shoppy<span class="text-orange-500">.me</span></div><br>
        Shop now and Get High quality products <br>
        
    </div>
    <div class="mt-15 text-center absolute top-80 left-1/3">
        <a class="my-6 p-2 h-14 w-auto text-xl border border-white hover:bg-blue-400 hover:text-white hover:font-body rounded
        hover:backdrop-blur-xl bg-gray-200" href="#">
            See best products &#128073;
        </a>
    </div>
</div> --}}
<div class="bg-gray-200">
    <div class="px-20 py-8 bg-white">
        <h2 class="text-2xl font-medium text-gray-800 drop-shadow-xl">{{ $category->name }} 
            <span class="text-orange-400">({{ $category->products->count() }})</span></h2>
        <div class="grid grid-cols-6 gap-3 bg-gray-100 p-8  border-l-8 border-indigo-400">
                @foreach ($products as $product)
                                <div class="grid grid-cols-2 overflow-hidden border border-2 border-blue-200 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
                                    <img src="{{asset($product->image)}}" class="p-2 col-span-1 w-full sm:h-48 md:40 lg:35 xl:28 object-cover" alt="img">
                                    <div class="col-span-1 border-l-2 border-gray-300 p-2">
                                        <div class="">
                                            <span class="text-sm text-gray-400">Name : </span>
                                            <span class="font:body font:bold">{{ $product->name }}</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Description : </span>
                                            <span class="text-lg">{{ $product->description }}</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Price : </span>
                                            <span class="text-green-400">{{ $product->price }}</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Quantity : </span>
                                            <span class="">{{ $product->quantity }}</span>
                                        </div>
                                    </div>
                                    <div class="col-span-2 p-2">
                                        <div class="bg-gray-200 hover:underline p-1 w-auto border border-sky-400 w-auto text-center">
                                            <a href="{{ route('products.details', ['id' => $product->id]) }}">Details</a>
                                        </div>
                                        <div class="bg-sky-600 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80">
                                            <a href="">Buy Now &#128176</a>
                                        </div>
                                        <div class=" font-bold mt-1 border w-auto text-center p- hover:border-orange-500 hover:opacity-80">
                                            <a href="">Add to cart <img src="{{ asset('images/basket5.png') }}" alt="" class="w-10 inline"></a>
                                        </div>
                                    </div>
                                </div>
                @endforeach

        </div>
    </div>
    {{-- <div class="">
        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="{{ asset('images/BAN-B_w272.gif') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/b') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/sliders-telephone.webp') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div> --}}
        <div class="grid grid-cols-2 items-center mb-2 bg-gray-900">
            <img src="{{ asset('images/preview.gif') }}" class="w-full  col-span-1 sm:h-48 md:40 lg:35 xl:10 object-cover" alt="">
            <img src="{{ asset('images/Ban-Centre-D2-Apple.gif') }}" alt="" class="col-span-1">
        </div>
    </div>
</div>



@endsection