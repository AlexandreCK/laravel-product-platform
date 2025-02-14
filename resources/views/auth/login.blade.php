@extends('layouts.app')

@section('content')
    <div class="bg-cover bg-center min-h-screen flex items-center justify-center"
        style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="w-full max-w-md mx-4">
            <div class="bg-white bg-opacity-90 shadow-xl rounded-xl p-8">
                <h2 class="text-3xl font-bold mb-8 text-center" style="color: #A594F9;">{{ __('Login') }}</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block font-medium mb-2"
                            style="color: #6A5ACD;">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-#A594F9 focus:border-#A594F9 transition duration-200"
                            style="border-color: #CABBE9;" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-sm" style="color: #FF6B8B;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block font-medium mb-2"
                            style="color: #6A5ACD;">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-#A594F9 focus:border-#A594F9 transition duration-200"
                            style="border-color: #CABBE9;" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="text-sm" style="color: #FF6B8B;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="form-checkbox rounded"
                                style="border-color: #CABBE9;" {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2" style="color: #6A5ACD;">{{ __('Remember Me') }}</span>
                        </label>
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="w-full text-white px-6 py-3 rounded-xl font-semibold transition duration-200"
                            style="background-color: #A594F9;" onmouseover="this.style.backgroundColor='#8875E5'"
                            onmouseout="this.style.backgroundColor='#A594F9'">
                            {{ __('Login') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="font-medium transition duration-200" style="color: #A594F9;"
                                onmouseover="this.style.color='#8875E5'" onmouseout="this.style.color='#A594F9'"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
