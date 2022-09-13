@extends('layouts.app')

@section('content')

@vite('resources/css/app.css')

{{-- Second Header --}}
<div class=" flex flex-row w-full bg-gray-400 p-2 justify-between">
    <div class="flex flex-row justify-between items-center">
        
        <div class="">
            <a href="{{ route('products.index') }}" class="flex flex-row items-center mr-10 hover:border p-2">
                <img src="{{asset('images/burger.png')}}" alt="burger-menu" class="w-5 h-4 cursor-pointer">
                <span class="pl-2"><strong>All</strong></span> 
            </a>
        </div>
        
        <div class="relative">
            <ul class="flex flex-row">
                <li class="mr-4 border border-indigo-600 p-1 hover:border-indigo-600 hover:border-2 cursor-pointer ">Best Sales</li>
                <li class="p-2 ">
                    @foreach ($category_list as $category)
                        <a class="mr-4 border border-white p-1 cursor-pointer hover:border-white-600 hover:opacity-85 cursor-pointer"
                            href="{{ route('product.category', ['id' => $category->id]) }}">{{ $category->name }}
                        </a>
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
            <a href="{{ route('auth.logout') }}" class="border border-white text-white p-3 font-semibold">Logout</a>
        @else
            <a href="{{ route('auth.getLogin') }}" class="border border-white text-white p-3 font-semibold">LogIn</a>
        @endif
    </div>
</div>
<div class="relative">
    <img class="h-1/2 w-full" src="{{ asset('images/bluegraybg.jpg') }}" alt="">
    <div class="text-5xl absolute top-20 left-40 drop-shadow-xl">
        Welcome on <br>
        <div class="font-body text-white cursor-pointer my-1">Shoppy<span class="text-orange-500">.me</span></div><br>
        <span class="text-2xl text-indigo-600 font-body"> (By Nick Wolfgang &#128521;)</span> <br>
        Shop now and Get High quality products <br>
        
    </div>
    <div class="mt-15 text-center absolute top-80 left-1/3">
        <a class="my-6 p-2 h-14 w-auto text-xl border border-white hover:bg-blue-400 hover:text-white hover:font-body rounded
        hover:backdrop-blur-xl bg-gray-200" href="#">
            See best products &#128073;
        </a>
    </div>
</div>
<div class="grid grid-cols-3 gap-4 my-2 items-center drop-shadow bg-gray-50 p-2 shadow-xl">
    <a href="" class="hover:cursor">
        <img src="{{ asset('images/sliders-Apple.webp') }}" class="col-span-1 w-full sm:h-72 md:40 lg:35 xl:10 object-cover hover:cursor" alt="">
    </a>
    <a href="" class="hover:cursor">
        <img src="{{ asset('images/Back-to-school-w-31_1.webp') }}" class="col-span-1 hover:cursor" alt="">
    </a>
    <a href="" class="hover:cursor">
        <img src="{{ asset('images/sliders-telephone.webp') }}" class="col-span-1 w-full sm:h-72 md:40 lg:35 xl:10 object-cover hover:cursor" alt="">
    </a>
    {{-- <img src="{{ asset('images/Ban-A-w30.gif') }}" class="col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover center" alt=""> --}}
    {{-- <img src="{{ asset('images/BAN-B_w272.gif') }}" class="col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover" alt=""> --}}

</div>
<div class="bg-gray-200">
    <div class="px-20 py-8 bg-white">
        <div class="">
            <div class="h-5 w-full bg-gray-600 my-6"></div>
            <div class="">
                <div class="w-full flex justify-between">
                    <span class="text-3xl font-semibold text-indigo-500 drop-shadow">Popular Products</span>
                    {{-- <a href="{{ route('product.category', ['id' => $cat->id]) }}" class="text-xl font-semibold p-2 bg-gray-50 hover:bg-gray-200 cursor">See more >></a> --}}
                </div>
                <div class="grid grid-cols-4 gap-8 bg-gray-100 p-4">
                    @foreach ($products->random(4) as $prod)
                        <div class="drop-shadow grid grid-cols-2 overflow-hidden relative border border-2 border-blue-100 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
                            <a href="cursor">
                                <img loading="lazy" src="{{asset($prod->image)}}" class="p-2 col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover" alt="img">
                                <div class="col-span-1 border-l-2 border-gray-300 p-2">
                                    <div class="">
                                        <span class="text-sm text-gray-400">Name : </span>
                                        <span class="font:body font:bold">{{ $prod->name }}</span>
                                    </div>
                                    <div class="">
                                        <span class="text-sm text-gray-400">Description : </span>
                                        <span class="text-lg overflow-hidden">{{ $prod->description }}</span>
                                    </div>
                                    <div class="">
                                        <span class="text-sm text-gray-400">Price : </span>
                                        <span class="text-green-400">{{ $prod->price }} Fcfa</span>
                                    </div>
                                    <div class="">
                                        <span class="text-sm text-gray-400">Quantity : </span>
                                        <span class="">{{ $prod->quantity }}</span>
                                    </div>
                                    <div class="bg-gray-200 hover:underline p-1 w-auto border border-sky-400 mt-4">
                                        <a href="{{ route('products.details', ['id' => $prod->id]) }}">Details</a>
                                    </div>
                                </div>
                                <div class="col-span-2 p-2">
                                    
                                    {{-- <div class="bg-sky-600 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80">
                                        <a href="">Buy Now &#128176</a>
                                    </div> --}}
                                </div>
                            </a>
                            <div class="absolute top-31 left-4">
                                <span class="" style="font-size:25px;">&#129351;</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
            <div class="h-5 w-full bg-gray-600 my-6"></div>
            @foreach ($category_list->random(3) as $cat)
                <div class="mb-6">
                    <div class="w-full flex justify-between">
                        <span class="text-3xl font-semibold text-gray-700 drop-shadow">{{ $cat->name }}</span>
                        <a href="{{ route('product.category', ['id' => $cat->id]) }}" class="text-xl font-semibold p-2 bg-gray-50 hover:bg-gray-200 cursor">See more >></a>
                    </div>
                    <div class="grid grid-cols-4 gap-8 bg-gray-100 p-4">
                        @if ($cat->products)
                            @forelse ($cat->products->random(4) as $prod)
                                <div class=" drop-shadow grid grid-cols-2 overflow-hidden border border-2 border-blue-100 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
                                    <a href="cursor relative">
                                            <img src="{{asset($prod->image)}}" class="p-2 col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover" alt="img">
                                        <div class="col-span-1 border-l-2 border-gray-300 p-2">
                                            <div class="">
                                                <span class="text-sm text-gray-400">Name : </span>
                                                <span class="font:body font:bold">{{ $prod->name }}</span>
                                            </div>
                                            <div class="">
                                                <span class="text-sm text-gray-400">Description : </span>
                                                <span class="text-lg overflow-hidden">{{ $prod->description }}</span>
                                            </div>
                                            <div class="">
                                                <span class="text-sm text-gray-400">Price : </span>
                                                <span class="text-green-400">{{ $prod->price }} Fcfa</span>
                                            </div>
                                            <div class="">
                                                <span class="text-sm text-gray-400">Quantity : </span>
                                                <span class="">{{ $prod->quantity }}</span>
                                            </div>
                                            <div class="bg-gray-200 hover:underline p-1 w-auto border border-sky-400 mt-4">
                                                <a href="{{ route('products.details', ['id' => $prod->id]) }}">Details</a>
                                            </div>
                                        </div>
                                        <div class="col-span-2 p-2">
                                            
                                            {{-- <div class="bg-sky-600 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80">
                                                <a href="">Buy Now &#128176</a>
                                            </div> --}}
                                        </div>
                                        @if ($prod->rate > 0.0)

                                        <div class="absolute top-5">
                                            <span class="p-2 text-white bg-green-500 mx-4 rounded text-xl font-semibold bg-gray-100 drop-shadow">
                                                {{ $prod->rate }} &#128276;
                                            </span>
                                        </div>
                                        @else

                                        @endif
                                    </a>
                                </div>
                            @empty
                            @endforelse
                        @else
                                <span>Nothing</span>
                        @endif
                       
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="grid grid-cols-2 items-center mb-2 bg-gray-300">
        <img src="{{ asset('images/preview.gif') }}" class="w-full  col-span-1 sm:h-48 md:40 lg:35 xl:10 object-cover" alt="">
        <img src="{{ asset('images/Ban-Centre-D2-Apple.gif') }}" alt="" class="col-span-1">
    </div>
</div>



@endsection