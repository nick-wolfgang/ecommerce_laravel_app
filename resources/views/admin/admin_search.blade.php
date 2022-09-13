@extends('layouts.admin')

@section('content')
@vite('resources/css/app.css')

<div class="my-6 mx-12  mt-4 mb-2 backdrop">
    <span class="text-2xl text-gray-800">&#128270; Search results for "<span class="font-semibold text-3xl font-mono">{{ $result }}</span>"</span>
</div>
<hr>
<div class="mx-20 p-6 my-4 drop-shadow-md">
    <div class="bg-blue-100 text-center">
        <span class="text-center text-2xl font-body">Products</span>
    </div>
    <div class="bg-gray-100 p-2">
        @if ($products->isNotEmpty())
        @foreach ($products as $product)
            <a href="{{ route('view.product', ['id' => $product->id]) }}" class=" hover:bg-blue-200  font-semibold">
                <div class="flex flex-row justify-between my-2 mx-96 bg-gray-50 hover:bg-gray-200 w-auto p-3">
                    {{ $product->name }}
                    {{-- <a href="{{ route('products.details', ['id' => $product->id]) }}" class="hover:bg-blue-200 hover:text-white">See details &#128073;</a> --}}
                    <hr>
                </div>
            </a>
        @endforeach
        @else
            <span class="text-2xl text-gray-800 font-semibold">Product does not exist :(</span>
        @endif
    </div>
    <div class="bg-blue-100 mt-4 mb-2 text-center">
        <span class="text-center text-2xl font-body">Users</span>
    </div>
    <div class="bg-gray-100 p-2">
        @if ($users->isNotEmpty())
            @foreach ($users as $user)
                <a href="{{ route('view.user', ['id' => $user->id]) }}" class=" hover:bg-blue-200  font-semibold">
                    <div class="flex flex-row justify-between my-2 mx-96 bg-gray-50 hover:bg-gray-200 w-auto p-3">
                        {{ $user->name }}
                        {{-- <a href="{{ route('products.details', ['id' => $product->id]) }}" class="hover:bg-blue-200 hover:text-white">See details &#128073;</a> --}}
                        <hr>
                    </div>
                </a>
            @endforeach
        @else
            <span class="text-2xl text-gray-600 font-semibold">User does not exist :(</span>
        @endif
    </div>

</div>

@endsection