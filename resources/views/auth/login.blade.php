@section('title', 'Log in - FoodBakery')

<x-guest-layout>
    <div class="w-full flex items-center justify-center">
        <a href="{{ route('front.index') }}">
            <img src="{{ asset('front/extra-images/foodbakery.svg') }}" style="width: 100%; height: 35px; margin-bottom: 10px;" alt="FoodBakery">
        </a>
    </div>
    <div class="w-full flex flex-col items-center justify-center" style="margin: 20px 0">
        <h3 class="text-xl font-bold" style="font-weight: 900;">Log in to your account</h3>
        <p class="text-muted"><small class="font-medium">Enter your email and password below to log in</small></p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('success')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" placeholder="example@example.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="w-full flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" placeholder="••••••••••••" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" checked
                    class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-gray-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-4">
            <button type="submit" class="font-medium w-full text-white rounded-md transition-colors"
                style="background-color: black; padding: 8px 0;">
                Log in
            </button>
        </div>

        <div class="w-full relative flex items-center justify-center" style="margin: 10px 0; gap: 10px">
            <div style="width: 100%; height: 1px; background-color: #4b5563;"></div>
            <span class="flex-shrink mx-4 text-gray-600 text-sm">or</span>
            <div style="width: 100%; height: 1px; background-color: #4b5563;"></div>
        </div>

        <div class="flex items-center justify-center">
            <a  href="{{ route('auth.google') }}"
                class="font-medium w-full flex items-center justify-center text-muted rounded-md transition-colors"
                style="gap: 10px; background-color: whitesmoke; padding: 8px 0;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                    <path fill="#4285F4"
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                    <path fill="#34A853"
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                    <path fill="#FBBC05"
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                    <path fill="#EA4335"
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                </svg>
                Continue with Google
            </a>
        </div>

        <div class="block w-full text-center mt-2">
            <p>
                <small class="font-medium">
                    Don't have an account? <a href="{{ route('register') }}" class="underline">Sign up</a>
                </small>
            </p>
        </div>
    </form>
</x-guest-layout>
