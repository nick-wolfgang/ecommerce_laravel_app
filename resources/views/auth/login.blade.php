@vite('resources/css/app.css')

<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 rounded bg-gray-100 shadow-2xl p-4">
        <div>
            
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 w-full"> 
                <div class="w-full">
                    <h3 class="font-body text-white text-2xl ml-4 cursor-pointer rounded-t bg-sky-800 h-15">Shoppy<span class="text-orange-500">.me</span></h3>
                </div>
                <br> - <br> <span class="underline text-2xl">Sign in        
            </span></h2>
        
        </div>
        <form class="mt-8 space-y-6" action="{{route('auth.postLogin')}}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none 
                        rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900
                        rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                    placeholder="Email address">
                    @error("email")
                        <span class="text-sm text-red-500 pb-2" >{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    @error("password")
                        <span class="text-sm text-red-500 pb-2" >{{$message}}</span>
                    @enderror
                </div>
            </div>

        <div class="flex items-center justify-between">
            <div></div>
            <div class="text-sm ">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 "> Forgot your password? </a>
            </div>
        </div>

        <div>
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <!-- Heroicon name: solid/lock-closed -->
                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
            </span>
            Sign in
            </button>
        </div>
        </form>
        <div class="text-sm font-maedium  text-center">
        No account yet? <a class="underline text-indigo-500 hover:font-bold" href="{{route('auth.getRegister')}}"> Create my account</a> 
        </div>
    </div>
</div>