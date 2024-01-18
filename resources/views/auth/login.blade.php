<x-app-layout title="Login">
    <!-- Authentication Card -->
    <x-authentication-card class="border transition-all duration-500 ease-in-out transform hover:border-indigo-500 hover:shadow-xl ">
        <!-- Logo Slot -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <!-- Validation Errors -->
        <x-validation-errors class="mb-4" />

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm font-semibold text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Input -->
            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-gray-700 font-semibold " />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    class="block w-full mt-1 rounded-md focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-500 ease-in-out" />
            </div>

            <!-- Password Input -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-gray-700 font-semibold" />
                <x-input id="password" type="password" name="password" required autocomplete="current-password"
                    class="block w-full mt-1 rounded-md focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-500 ease-in-out" />
            </div>

            <!-- Remember Me Checkbox and Forgot Password Link -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="flex items-center text-gray-700 font-semibold">
                    <x-checkbox id="remember_me" name="remember" class="text-indigo-500" />
                    <span class="ml-2">{{ __('Remember me') }}</span>
                </label>
             
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline font-semibold">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Login Button and Google Login Link -->
            <div class="flex flex-col items-center mt-6 space-y-4">
                <x-button class="w-full md:w-40 bg-indigo-500 hover:bg-indigo-600 transform transition-all duration-500 hover:scale-105">
                    {{ __('Log in') }}
                </x-button>

                <p class="mt-4 text-sm text-gray-600 font-semibold">________________ Or continue with ________________</p>

            <a href="{{ url('auth/google') }}" class="flex items-center backdrop:bg-gray-50 hover:text-red-500" >
    <img src="https://www.vectorlogo.zone/logos/google/google-icon.svg" alt="Google Logo"
        class="w-6 h-6 flex-shrink-0 mr-2 stroke-cyan-500">
    <span class="text-base font-semibold">Login with Google</span>
</a>
     </div>
        </form>
    </x-authentication-card>
</x-app-layout>