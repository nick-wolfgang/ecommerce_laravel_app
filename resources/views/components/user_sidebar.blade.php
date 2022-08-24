@vite('resources/css/app.css')

<div class="grid content-between ">
    {{-- <div class="">
        <div class="flex flex-column m-4 text-center">
            <h3 class="font-body text-white text-2xl cursor-pointer">Shoppy<span class="text-orange-500">.me</span></h3>
        </div>
        <hr class="bg-gray-500">
        <div class="flex items-center mt-4 m-2">
            <div class="mr-2 p-2">
                <a href="{{ route('profile.index') }}">
                    <img class="h-10 z-0 m-0 p-0" src="{{asset('images/avatar2.jpg')}}" alt="">
                </a>
                
                <div class="flex items-end items-center">
                    <h1 class=" text-sm text-white font-bold w-auto">
                        {{-- @if 
    
                        @else
    
                        @endif --}}
                    </h1>
                    {{-- <div class="h-3 w-3 bg-green-500 rounded-full mr-4 z-10 border-2 border-gray-100"></div> 
                    <span class="flex h-3 w-3 justify-between">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75"></span>
                        <span class=" relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                </div>
            </div>
        </div>
        <hr class="bg-gray-500">
        <div class="flex flex-col p-4 ">
            <div class="flex items-center ">
                <input type="text" name="name" id="name" class="h-8 mt-2 w-full
                    appearance-none-none block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  
                    focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                     placeholder="Search products"
                >
                <img src="{{asset('images/search-icons.png')}}" alt="search-icon" class="w-10 h-8 mt-2 cursor-pointer">
            </div>
            <div class="">
                <ul class="text-white font-bo text-sm">
                    <li class="my-4 text-lg border-b-2"><a class="" href="{{ route('profile.create') }}">Add a product</a></li>
                    <li class="my-4 text-lg border-b-2"><a class="" href="{{ route('profile.index') }}">View Products</a></li>
                    <li class="my-4 text-lg border-b-2"><a class="" href="">My Products</a></li>
                    <li class="my-4 text-lg border-b-2"><a class="" href="">My Products</a></li>
                    <li class="my-4 text-lg border-b-2"><a class="" href="">My Products</a></li>

                </ul>
            </div>
        </div> 
    </div> --}}
    <div class="">
        <aside class=" w-64" aria-label="Sidebar">
            <div class="h-sreen overflow-y-auto py-4 px-3 bg-gradient-to-b from-sky-300 to-orange-300 shadow dark:bg-gray-800">
               <a href="{{ route('products.index') }}" class="flex flex-column m-4 text-center">
                    <h3 class="font-body text-white text-2xl cursor-pointer">Shoppy<span class="text-orange-500">.me</span></h3>
               </a>
                <a href="{{ route('admin.home') }}" class=" z-30">
                    <div class="flex items-center mt-4 m-2">
                        <div class="mr-2 p-2 justify-center">
                            <a href="{{ route('profile.index') }}">
                                <img class="h-10 z-0 m-0 p-0" src="{{asset('images/avatar2.jpg')}}" alt="">
                            </a>
                            
                            <div class="flex items-end items-center drop-shadow">
                                <h1 class=" text-lg text-gray-900 font-bold w-auto hover:cursor">
                                    {{Auth::user()->name}}
                                </h1>
                                {{-- <div class="h-3 w-3 bg-green-500 rounded-full mr-4 z-10 border-2 border-gray-100"></div> --}}
                                <span class="flex h-3 w-3 justify-between">
                                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75"></span>
                                    <span class=" relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                   </a>
               <ul class="space-y-2">
                <hr>
                <li class="my-10">
                    <a href="{{ route('profile.create') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">Add a Product</span>
                    </a>
                 </li>
                 <li class="my-10">
                    <a href="{{ route('profile.index') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">View Products</span>
                    </a>
                 </li>
                  {{-- <li class="my-5">
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        <span class="ml-3">Dashboard</span>
                     </a>
                  </li> --}}
                  <hr>
                  {{-- <li class="my-10">
                    <a href="{{ route('view_users') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </a>
                  </li> --}}
                  <li class="my-10">
                    <a href="{{ route('profile.index') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                    </a>
                 </li>
                  <li class="my-10">
                     <a href="{{ route('profile.help') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Help</span>
                        <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                     </a>
                  </li>
                  <li class="my-10">
                     <a href="{{ route('auth.logout') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                     </a>
                  </li>
                  <hr class="h-1 bg-gray-300 rounded-md"> 
    
                  {{-- <li class="my-10">
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                     </a>
                  </li> --}}
                  <li class="my-10">
                     <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                        <span class="flex-1 ml-3 whitespace-nowrap"></span>
                     </a>
                  </li>
                  <li class="my-10">
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white">
                       <span class="flex-1 ml-3 whitespace-nowrap"></span>
                    </a>
                 </li>
                 
                 
               </ul>
               <div class="bg-gray-600 mb-0 items-center p-2">
                <div class="mt-2.5">
                    <span class="">All rights reserved</span><br>
                    <span class="font-italics underline text-gray-100">&copy; Copyright {{date('Y')}}. </span>
                </div>
            </div>
            </div>
         </aside>
         
    </div>
    
    
    


</div>
