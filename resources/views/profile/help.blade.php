@extends('layouts.user_profile')

@section('content')

@vite('resources/css/app.css')

<div class="">
    <span class=""> 
        Get in touch with us if you need any help
    </span>
    <div class="">
        <div class="flex flew-row p-4">
            <form action="{{route('profile.save_help')}}" enctype="multipart/form-data" method="POST" >
               @csrf
               <div class="flex flex-col flex-wrap mb-8 mr-6 p-8">
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
                    <div class="my-8">
                        <input type="submit" class="text-white-400 bg-gradient-to-r from-sky-300 via -indigo-300 to-orange-200 p-2 rounded-md text-white hover:opacity-80 hover:border hover:text-gray-800" value="Send to admin">
                   </div>
               </div>
               
             </form>
             <img src="{{ asset('images/illustration.jpg') }}" class="w-1/2 h-1/5 drop-shadow" alt="">
        </div>
    </div>
</div>

@endsection