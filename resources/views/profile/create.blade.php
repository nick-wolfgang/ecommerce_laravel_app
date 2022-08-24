@extends('layouts.user_profile')

@section('content')

@vite('resources/css/app.css')

<div class="">
    <div class="flex flew-row p-4">
        <form action="{{route('profile.save')}}" enctype="multipart/form-data" method="POST" >
           @csrf
           <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
               <div class="flex flex-col py-2">
                   <span class="font-bold">Name</span>
                   <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="Product name" class="w-1/2 border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                   @error('name')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="flex flex-col py-2">
                   <span class="font-bold">Description</span>
                   <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder=" Product Description" class="w-1/2 border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
                   @error('description')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="flex flex-col py-2">
                   <span class="font-bold">Price</span>
                   <input type="number" name="price" value="{{old('price')}}" id="price"  placeholder="Product price" class="w-1/2 border  p-1 rounded-md @error('price') border-red-500 @enderror"/>
                   @error('price')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>

               <div class="flex flex-col py-2">
                   <span class="font-bold">Quantity</span>
                   <input type="number" name="quantity" value="{{old('quantity')}}" id="quantity"  placeholder="Product quantity" class="w-1/2 border  p-1 rounded-md @error('quantity') border-red-500 @enderror"/>
                   @error('quantity')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>

               <div class="flex flex-col py-2">
                   <span class="font-bold">Min Stock</span>
                   <input type="number" name="stock_min" value="{{old('stock_min')}}" id="stock_min"  placeholder="Product Minimum Stock" class="w-1/2 border  p-1 rounded-md @error('stock_min') border-red-500 @enderror"/>
                   @error('stock_min')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="flex flex-row flex-wrap">
                    @forelse ($cats as $cat)
                        <label class="mr-3">
                            <input type="radio" name="category_id" value="{{$cat->id}}"> {{$cat->name}}
                        </label>
                        @empty
                        <span>Aucune catégorie</span>
                    @endforelse
                </div>
                <div class="flex flex-col py-2">
                    <span class="font-bold">Product's Image</span>
                    <input type="file" name="image" value="{{old('image')}}" id="image"  placeholder="Product Minimum Stock" class="w-1/2 border  p-1 rounded-md @error('image') border-red-500 @enderror"/>
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-end  bg-gray-50 border-t border-gray-100 w-1/4">
                    <input type="submit" class="text-white-400 bg-gradient-to-r from-sky-300 via -indigo-300 to-orange-200 p-2 rounded-md text-white hover:opacity-80 hover:border hover:text-gray-800" value="Create Product">
               </div>
           </div>
           
         </form>
         <img src="{{ asset('images/illustration.jpg') }}" class="w-1/2 h-1/5 drop-shadow" alt="">
    </div>
</div>

@endsection