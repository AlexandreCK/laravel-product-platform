@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-6 text-center">{{ __('Register') }}</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">{{ __('Name') }}</label>
                            <input id="name" type="text"
                                class="w-full px-4 py-2 border rounded-lg @error('name') border-red-500 @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror"
                                name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="block text-gray-700">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="w-full px-4 py-2 border rounded-lg"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex items-center justify-center">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
