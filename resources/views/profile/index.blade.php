@extends('layouts.user_profile')

@section('content')

@vite('resources/css/app.css')

<div class="bg-gray-100 h-full">
    <div class="grid grid-cols-4 gap-8 bg-gray-100 p-4">
        @if ($products != null)
            @foreach ($products as $prod)
                <div class="drop-shadow grid grid-cols-2  border border-2 border-blue-100 p-2 hover:opacity-85 shadow shadow bg-white min-w-12 ">
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
                    {{-- </a> --}}
                    <div class="grid grid-cols-2 gap-4 mt-0">
                        <div class="bg-green-300 hover:bg-green-500 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80 rounded h-auto">
                            <a href="{{ route('profile.edit', ['id' => $prod->id]) }}">Edit</a>
                        </div>
                        <div class="bg-rose-300 hover:bg-rose-500 text-white font-bold my-4 w-auto text-center p-2 hover:opacity-80 rounded">
                            <form action="{{ route('profile.delete', ['id' => $prod['id']] ) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input  class="" type="submit" value="Delete">
                            </form>
                        </div>
                    </div>               
                </div>
                
            @endforeach

        @else
            <span class="h-20 m-30 bg-gray-300 rounded">No products found</span>
        @endif
    </div>
</div>

@endsection