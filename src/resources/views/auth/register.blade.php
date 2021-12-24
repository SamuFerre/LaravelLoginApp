@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-screen-md">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-1/2 order-2 md:order-1">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 shadow-md mt-20">
                        <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                            {{ __('Register') }}
                        </div>
                        <form class="py-10 px-5" method="POST" action="{{ route('register') }}" novalidate>
                            @csrf
    
                            <div class="flex flex-wrap mb-6">
                                <label for="name" class="block text-gray-700 text-sm mb-2">{{ __('Username') }}</label>
                                <input id="name" type="text" class="p-3 bg-gray-200 rounded form-input w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('username')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="telephone" class="block text-gray-700 text-sm mb-2">{{ __('Telephone') }}</label>
                                <input id="telephone" type="tel" class="p-3 bg-gray-200 rounded form-input w-full @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}"  autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="flex flex-wrap mb-6">
                                <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>
                                <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="flex flex-wrap mb-6">
                                <label for="password-confirm" class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded form-input w-full" name="password_confirmation"  autocomplete="new-password">
                            </div>
    
                            <div class="flex flex-wrap">
                                    <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 
                                    p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                        {{ __('Register') }}
                                    </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
