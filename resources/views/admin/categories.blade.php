@extends('layouts.admin')

@section('content')
@vite('resources/css/app.css')

<div class="">

    <div class="overflow-x-auto relative sm:rounded-lg flex flex-row pl-2">
        <div class="w-auto h-auto p-2 rounded ">
            <form action="{{ route('save_category') }}" method="post">
                @csrf
                <div class="flex flex-col py-2">
                    <span class="font-bold">New Category</span>
                    <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="Category Name" class="w-1/2 border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" name="" id="" value="Add this category" class="mt-2 mb-4 font-semibold text-white-400 bg-gradient-to-r from-sky-300 via -indigo-300 
                    to-orange-200 p-2 rounded-md text-white hover:opacity-80 hover:border hover:text-gray-800">
            </form>
        </div>
        <table class="w-1/3 pl-2 text-sm text-left text-gray-500 dark:text-gray-400 shadow-2xl my-10 mx-25 p-30">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $cat)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $cat->id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $cat->name }}
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('edit.category', ['id' => $cat['id']] ) }}" class="font-medium text-green-600 hover:underline">
                            Edit
                        </a>
                        <form action="{{ route('delete.category', ['id' => $cat['id']] ) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <input  class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit" value="Remove">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- @if ($cats->count()>5) 
        <div class="w-auto my-4 p-3 bg-gray-200 rounded">
            {{ $cats->links() }}
        </div>
    @endif --}}
</div>

@endsection