@extends('layouts.user_profile')

@section('content')

@vite('resources/css/app.css')

<div class="">
    Here we Edit products
    <form  action="{{ route('profile.update', ['id' => $product['id']]) }}" method="POST" >
        @method('put')
       @csrf
       <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
           <div class="flex flex-col py-2">
               <span>Name</span>
               <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="Product name" class="w-1/3 border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
               @error('name')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
               @enderror
           </div>

           <div class="flex flex-col py-2">
               <span>Description</span>
               <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder="Product Description" class="w-1/3 border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
               @error('description')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
               @enderror
              
             
           </div>

           <div class="flex flex-col py-2">
               <span>Price</span>
               <input type="number" name="price" value="{{old('price')}}" id="price"  placeholder="Product price" class="w-1/3 border  p-1 rounded-md @error('price') border-red-500 @enderror"/>
               <!-- @error('price')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
               @enderror -->
           </div>

           <div class="flex flex-col py-2">
               <span>Quantity</span>
               <input type="number" name="quantity" value="{{old('quantity')}}" id="quantity"  placeholder="Product quantity" class="w-1/3 border  p-1 rounded-md @error('quantity') border-red-500 @enderror"/>
               @error('quantity')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
               @enderror
           </div>

           <div class="flex flex-col py-2">
               <span>Min Stock</span>
               <input type="number" name="stock_min" value="{{old('stock_min')}}" id="stock_min"  placeholder="Product Minimum Stock" class="w-1/3 border  p-1 rounded-md @error('stock_min') border-red-500 @enderror"/>
               @error('stock_min')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
               @enderror
           </div>
           <div class="flex flex-col py-2">
                <span class="font-bold">Product's Image</span>
                <input type="file" name="image" value="{{old('image')}}" id="image"  placeholder="Product Minimum Stock" class="w-1/2 border  p-1 rounded-md @error('image') border-red-500 @enderror"/>
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
       </div>
       <div class="ml-6 flex items-center justify-end  bg-gray-200 border-t border-gray-100 w-1/3">
          <input type="submit" class="text-white-400 bg-blue-500 p-2 rounded-md text-white hover:opacity-80 hover:border" value="Save">
       </div>
     </form>
</div>

@endsection