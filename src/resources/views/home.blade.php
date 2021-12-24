@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-screen-md">
    <div class="flex flex-wrap justify-center">
        <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
    <div class="flex flex-col mt-10">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead class="bg-gray-100 ">
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                                Username
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                                Telephone
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                <div class="text-sm leading-5 font-medium text-gray-900"> {{Auth::user()->name }} </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                <div class="text-sm leading-5 font-medium text-gray-900"> {{Auth::user()->email }} </div>

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                <div class="text-sm leading-5 font-medium text-gray-900"> {{Auth::user()->telephone }} </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                <a 
                                    href="{{route('user.edit', [Auth::user()->id])}}"
                                        class="text-teal-600 hover:text-teal-900 mr-5">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection