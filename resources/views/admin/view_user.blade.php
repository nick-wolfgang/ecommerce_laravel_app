@extends('layouts.admin')

@section('content')
@vite('resources/css/app.css')

<div class="">

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
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
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
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection