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

<div class="m-2 ">
    <span class="text-2xl drop-shadow">
        {{ $product->category->name }} >
        <span class="text-lg text-gray-600 border p-1">{{ $product->name }}</span>
        <hr>
    </span>
        <div class="flex flex-row mx-16 justify-between items-center bg-gray-100 mt-2 px-4">
            <div class="col-span-1  w-1/6">
                <img src="{{ asset('images/26558-big.gif') }}" alt="">
            </div>
            <img src="{{asset($product->image)}}" class="py-2 col-span-1 w-96 sm:h-80 md:35 lg:40 xl:48  object-cover" alt="img">
            <div class="flex flex-col py-2 bg-gray-50">
                <span class="font-semibold text-center border p-1 w-auto mb-15"><span class="text-gray-300">Seller :</span> {{ $product->user->name }}</span>
                <span class="text-2xl font-semibold"><span class="text-xl text-gray-600 mt-20">Name : </span>{{ $product->name }}</span>
                <span class="text-2xl font-semibold"><span class="text-xl text-gray-600">Quantity : </span>{{ $product->quantity }}</span>
                <span class="text-2xl font-semibold text-green-600"><span class="text-xl text-gray-600">Price : </span>{{ $product->price }} Fcfa</span>
                <span class="text-2xl font-semibold"><span class="text-xl text-gray-400 italic">Date posted : </span>{{ $product->created_at }}</span>
                <hr>
                <div class="bg-sky-600 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80 hover:border-white">
                    <a href="{{ route('product.buy', ['id' => $product->id]) }}" class="">Buy Now &#128176;</a>
                </div>
                <div class=" font-bold mt-1 border w-auto text-center p- hover:border-orange-500 hover:opacity-80">
                    <a href="">Add to cart <img src="{{ asset('images/basket5.png') }}" alt="" class="w-10 inline"></a>
                </div>
            </div>  
            <div class="col-span-1 w-1/6">
                <img src="{{ asset('images/b0c754f7809027fa361fd5d04bd3588f.gif') }}" alt="">
            </div>
        </div>
        <div class="h-36">
            <span class="text-2xl text-gray-800"><span class="text-xl text-gray-600 italic underline">Description</span> : {{ $product->description }}</span>
        </div>

        <div class=" p-2 bg-gray-100">
            <div class="flex flex-row justify-center items-center py-2">
                <span class="font-semibold text-l">Rating : </span>
                <span class="p-2 text-white bg-green-500 mx-4 rounded text-xl font-bold bg-gray-100 drop-shadow">
                    @if ($product->rate == null)
                        0.0
                    @else
                        {{ $product->rate }} / 5
                    @endif
                </span>
                <span class="text-sm text-gray-400">N° of rates : {{ $product->num_rates }}</span>
            </div>
            <form action="{{ route('product.rate', ['id' => $product->id]) }}" method="post" class=" bg-gray-200 my-2">
                @csrf
                <div class="flex flex-row justify-center items-center mb-2">
                    <div class="items-center justify-center mx-2 border border-gray-300">
                        <p class="" style="font-size:10px;">Bad &#128577;</p>
                        <input type="radio" name="rate" value="1" class="ml-2" required>
                    </div>
                    <div class="items-center justify-center  mx-2 border border-gray-300">
                        <p class="" style="font-size:20px;">Fair &#128530;</p>
                        <input type="radio" name="rate" value="2" required>
                    </div>
                    <div class="items-center justify-center mx-2 border border-gray-300">
                        <p class="" style="font-size:20px;">Good &#128578;</p>
                        <input type="radio" name="rate" value="3" required>
                    </div>
                    <div class="items-center justify-center mx-2 border border-gray-300">
                        <p class="" style="font-size:20px;">Better &#128524;</p>
                        <input type="radio" name="rate" value="4" class="rating" required>
                    </div>
                    <div class="items-center justify-center mx-2 border border-gray-300">
                        <p class="" style="font-size:20px;">Best &#128525;</p>
                        <input type="radio" name="rate" value="5" required>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <input type="submit" value="Rate this product" class="p-2 border border-blue-300 mb-2 hover:bg-blue-500 hover:text-white">
                </div>
            </form>
        </div>
        <hr>

        <div class="grid grid-cols-2 gap-2 my-4">
            <div class="col-span-1 border-l-8 border-indigo-400 p-2">
                <div class="w-full flex justify-between">
                    <span class="text-2xl text-center font-semibold text-gray-700 drop-shadow">Similar Products &#128073;</span>
                    <a href="{{ route('product.category', ['id' => $product->category->id]) }}" class="text-xl font-semibold p-2 bg-gray-50 hover:bg-gray-200 cursor">See more >></a>
                </div>
                <hr>
                <div class="grid grid-cols-2 gap-8 bg-gray-100 p-4 my-2 overflow-scroll">
                    @foreach ($product->category->products->random(2) as $pro)
                        @if ($product->id != $pro->id)
                            <div class="drop-shadow grid grid-cols-2 overflow-hidden border border-2 border-blue-100 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
                                    <img src="{{asset($pro->image)}}" class="p-2 col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover" alt="img">
                                    <div class="col-span-1 border-l-2 border-gray-300 p-2">
                                        <div class="">
                                            <span class="text-sm text-gray-400">Name : </span>
                                            <span class="font:body font:bold">{{ $pro->name }}</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Description : </span>
                                            <span class="text-lg">{{ $pro->description }}</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Price : </span>
                                            <span class="text-green-400">{{ $pro->price }} Fcfa</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Quantity : </span>
                                            <span class="">{{ $pro->quantity }}</span>
                                        </div>
                                        <div class="bg-gray-200 hover:underline p-1 w-auto border border-sky-400 mt-4">
                                            <a href="{{ route('products.details', ['id' => $pro->id]) }}">Details</a>
                                        </div>
                                    </div>
                                    <div class="col-span-2 p-2">
                                        <div class="bg-sky-600 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80">
                                                @if (Auth::check())
                                                    <a href="{{ route('product.buy', ['id' => $pro->id]) }}" class="">Buy Now &#128176</a>
                                                @else
                                                    <a href="{{ route('auth.getLogin') }}" class="">Buy Now &#128176</a>
                                                @endif
                                        </div>
                                        <div class=" font-bold mt-1 border w-auto text-center p- hover:border-orange-500 hover:opacity-80">
                                            @if (Auth::check())
                                                <a href="">Add to cart <img src="{{ asset('images/basket5.png') }}" alt="" class="w-10 inline"></a>
                                            @else
                                                <a href="{{ route('auth.getLogin') }}" class="">Add to cart</a>
                                            @endif
                                        </div>
                                    </div>
                            </div> 
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-span-1 border-l-8 border-indigo-400 p-2">
                {{-- <span class="text-2xl font-semibold text-center text-gray-700 drop-shadow">Other Products &#128073;</span> --}}
                <div class="w-full flex justify-between">
                    <span class="text-2xl text-center font-semibold text-gray-700 drop-shadow">Other Products &#128073;</span>
                    <a href="{{ route('products.index') }}" class="text-xl font-semibold p-2 bg-gray-50 hover:bg-gray-200 cursor">See more >></a>
                </div>
                <hr>
                <div class="grid grid-cols-2 gap-8 bg-gray-100 p-4 my-2 overflow-scroll ">
                    @foreach ($products_all->random(2) as $prod)
                        @if ($prod->category != $product->category)
                            <div class="drop-shadow grid grid-cols-2 overflow-hidden border border-2 border-blue-100 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
                                    <img src="{{asset($prod->image)}}" class="p-2 col-span-1 w-full sm:h-48 md:40 lg:35 xl:10 object-cover" alt="img">
                                    <div class="col-span-1 border-l-2 border-gray-300 p-2">
                                        <div class="">
                                            <span class="text-sm text-gray-400">Name : </span>
                                            <span class="font:body font:bold">{{ $prod->name }}</span>
                                        </div>
                                        <div class="">
                                            <span class="text-sm text-gray-400">Description : </span>
                                            <span class="text-lg">{{ $prod->description }}</span>
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
                                        <div class="bg-sky-600 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80">
                                                @if (Auth::check())
                                                    <a href="{{ route('product.buy', ['id' => $prod->id]) }}" class="">Buy Now &#128176</a>
                                                @else
                                                    <a href="{{ route('auth.getLogin') }}" class="">Buy Now &#128176</a>
                                                @endif
                                        </div>
                                        <div class=" font-bold mt-1 border w-auto text-center p- hover:border-orange-500 hover:opacity-80">
                                            <a href="">Add to cart <img src="{{ asset('images/basket5.png') }}" alt="" class="w-10 inline"></a>
                                        </div>
                                    </div>
                            </div> 
                        @endif
                    @endforeach
                </div>
            </div>
            
            
        </div>
        <a href="" class="hover:cursor my-4">
            <img loading="lazy" src="{{ asset('images/preview.gif') }}" class="w-full  col-span-1 sm:h-48 md:40 lg:35 xl:10 object-cover" alt="">
        </a>

</div>

@endsection