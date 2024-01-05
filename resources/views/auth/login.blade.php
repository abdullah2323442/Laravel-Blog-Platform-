<x-app-layout title="Login">
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <div class="flex items-center justify-end mt-4 space-x-4">
                    <x-button class="text-base px-6 py-3">
                        {{ __('Log in') }}
                    </x-button>

                    <a href="{{ url('auth/google') }}"
                        class="inline-flex items-center justify-center bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-md transition duration-300 ease-in-out">
                        <img src="https://www.vectorlogo.zone/logos/google/google-icon.svg" alt="Google Logo"
                            class="w-6 h-6 flex-shrink-0">
                        <span class="text-base font-semibold ml-2">Login with Google</span>
                    </a>
                </div>



            </div>
        </form>
    </x-authentication-card>
</x-app-layout>
