@extends('layouts.admin')

@section('content')
@vite('resources/css/app.css')

<div class="">
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Image
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Decription
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Quantity
                </th>
                <th scope="col" class="py-3 px-6">
                    Stock_min
                </th>
                <th scope="col" class="py-3 px-6">
                    Category 
                </th>
                <th scope="col" class="py-3 px-6">
                    Creator's Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Creator's Id
                </th>
                <th scope="col" class="py-3 px-6">
                    Creation Date
                </th>
                <th scope="col" class="py-3 px-6">
                    Latest Update
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    @if ($product->image)
                        <div class="items-center">
                            <img src="{{ asset($product->image) }}" height="30px" width="30" alt="">
                            <a href="{{ asset($product->image) }}" class="text-orange-400 hover:underline">view image</a>
                        </div>
                    @else
                        <span>This product has NO image</span>
                    @endif
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->name }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->description }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->price }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->quantity }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->stock_min }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    @if ( $product->category )
                        {{ $product->category->name }}
                    @else
                        <span>No Name</span>
                    @endif
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->user->name }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->category_id }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->created_at }}
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    {{ $product->updated_at }}
                </td>
                <td class="py-4 px-6">
                    <form action="{{ route('delete_product', ['id' => $product['id']] ) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input  class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit" value="Remove">
                    </form>
                </td>
            </tr>        
        </tbody>
        
            
    </table>
</div>

</div>

@endsection