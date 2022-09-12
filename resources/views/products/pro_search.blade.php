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
            <a href="{{ route('products.index') }}" class="border border-white text-white p-3 font-semibold">Logout</a>
        @else
            <a href="{{ route('auth.getLogin') }}" class="border border-white text-white p-3 font-semibold">LogIn</a>
        @endif
    </div>
</div>

<div class="my-6 mx-12">
    <span class="text-2xl text-gray-800">&#128270; Search results for "<span class="font-semibold text-3xl font-mono">{{ $result }}</span>"</span>
</div>
<hr>

<div class="bg-gray-100 p-2">
    {{-- @if ($products->isNotEmpty()) --}}
    @foreach ($products as $product)
        <a href="{{ route('products.details', ['id' => $product->id]) }}" class="hover:text-white hover:bg-blue-200  font-semibold">
            <div class="flex flex-row justify-between my-2 mx-96 bg-gray-50 hover:bg-gray-200 w-auto p-3">
                {{ $product->name }}
                {{-- <a href="{{ route('products.details', ['id' => $product->id]) }}" class="hover:bg-blue-200 hover:text-white">See details &#128073;</a> --}}
                <hr>
            </div>
        </a>
    @endforeach
    
    {{-- @foreach ($products as $product)
        <div class="drop-shadow overflow-hidden border border-2 border-blue-100 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
            <a href="" class="cursor">
                <img src="{{asset($product->image)}}" class="p-2 col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover" alt="img">  
                <div class="border-l-2 border-gray-300 p-2">
                    <span class="font:body font:bold">{{ $product }}</span>
                </div>
            </a>
        </div>
    @endforeach --}}
    {{-- @else
        No such product
    @endif --}}
</div>

<div class="w-auto items-center mb-2 bg-gray-900">
    {{-- <img src="{{ asset('images/preview.gif') }}" class="w-full  col-span-1 sm:h-48 md:40 lg:35 xl:10 object-cover" alt=""> --}}
    <img src="{{ asset('images/Ban-Centre-D2-Apple.gif') }}" alt="" class="col-span-1">
</div>
@endsection