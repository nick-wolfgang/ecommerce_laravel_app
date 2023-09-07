@extends('layouts.admin')

@section('content')
@vite('resources/css/app.css')

<div class="">

    <div class="p-6 flex flex-col justify-center items-center h-auto">
        <form class="" action="{{ route('user.search') }}" method="get">
            @csrf
            <div class="flex items-center justify-center h-auto">
                <input type="text" name="search" id="name" class="h-8 mt-2 
                                appearance-none-none block w-full px-2 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  
                                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Enter user's name" required
                >
                <input type="submit" class="w-auto p-1 mt-2 h-full border border-gray-300 cursor-pointer bg-white rounded-sm  hover:bg-gray-100" value="&#128270;">
            </div>
        </form>
        <div>
            @if(isset($users_search_results))
                <div class="inline-flex flex-col justify-center items-center relative text-gray-500">
                    <ul class="bg-white border border-gray-100 w-full mt-2 p-10">
                        <h6><i class="text-sm ">Search results for : </i><b>{{ $input }}</b></h6>
                        <li class="pl-8 pr-2 py-1 border-b-2 border-gray-100 relative ">
                            <div class="flex flex-col">
                                @if($users_search_results->isNotEmpty())
                                    @foreach($users_search_results as $user)
                                        <a href="{{ route('view.user', ['id' => $user->id]) }}" class="">
                                            <span class="cursor-pointer hover:bg-yellow-50 hover:text-gray-900">
                                                &#128100  -  {{ $user->name }}
                                            </span>
                                        </a>
                                    @endforeach
                                @else
                                    <span>No user found </span>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
    
</div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        User Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        User Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Is Admin
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <div class="hover:bg-gray-200">
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 ">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->id }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $user->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->email }}
                                </td>
                                <td class="py-4 px-6">
                                    @if ($user->admin)
                                        &#10003;
                                    @else
                                        &#10060;
                                    @endif
                                </td>
                                <td class="py-4 px-6">
                                    <form action="{{ route('delete_user', ['id' => $user['id']] ) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input  class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit" value="Remove">
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('view.user', ['id' => $user['id']]) }}" class="text-blue-500 font-body hover:bg-gray-100 border p-2 border-blue-100">User Statistics</a>
                                </td>
                        </tr>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="w-auto my-4 p-3 bg-gray-200 rounded">
        {{ $users->links() }}
    </div>
</div>

@endsection