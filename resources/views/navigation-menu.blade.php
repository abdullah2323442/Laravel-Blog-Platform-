<nav class="flex items-center justify-between px-4 md:px-6 lg:px-8 py-3 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}" class="mr-4 md:mr-10">
            <x-application-mark class="h-8 w-auto" />
        </a>
        <div class="ml-4 md:ml-10 top-menu hidden md:flex">
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                <x-nav-link href="{{ route('home') }}">
                    {{ __('menu.home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('posts.index') }}">
                    {{ __('menu.blog') }}
                </x-nav-link>
                @auth
                    <a href="{{ url('http://127.0.0.1:8000/dashboard/posts') }}" class="inline-flex items-center hover:text-yellow-900 text-sm text-indigo-500' : 'inline-flex items-center hover:text-yellow-900 text-sm text-gray-500" wire:custom-directive>
                        Manage Posts
                    </a>
                    <a href="{{ url('http://127.0.0.1:8000/dashboard/comments') }}" class="inline-flex items-center hover:text-yellow-900 text-sm text-indigo-500' : 'inline-flex items-center hover:text-yellow-900 text-sm text-gray-500" wire:custom-directive>
                        Manage Comments
                    </a>
                    <x-nav-link href="{{ url('http://127.0.0.1:8000/chatify') }}">
                        {{ __('Chat') }}
                    </x-nav-link>
                    <a href="{{ url('http://127.0.0.1:8000/dashboard') }}" class="inline-flex items-center hover:text-yellow-900 text-sm text-indigo-500' : 'inline-flex items-center hover:text-yellow-900 text-sm text-gray-500" wire:custom-directive>
                        Dashboard
                    </a>
                @endauth
            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-4">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>

    <!-- Hamburger Menu for Mobile -->
    <div class="md:hidden">
        <button id="mobile-menu-toggle" class="text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden fixed top-0 left-0 w-full h-full bg-white bg-opacity-95 z-50">
        <!-- Close Button -->
        <div class="flex justify-end p-4">
            <button id="mobile-menu-close" class="text-gray-700 hover:text-gray-900 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Links -->
        <div class="flex flex-col items-center space-y-4">
            <x-nav-link href="{{ route('home') }}">
                {{ __('menu.home') }}
            </x-nav-link>
            <x-nav-link href="{{ route('posts.index') }}">
                {{ __('menu.blog') }}
            </x-nav-link>
            @auth
                <a href="{{ url('http://127.0.0.1:8000/dashboard/posts') }}"
                    class="text-gray-700 hover:text-gray-900 text-sm">
                    Manage Posts
                </a>
                <a href="{{ url('http://127.0.0.1:8000/dashboard/comments') }}"
                    class="text-gray-700 hover:text-gray-900 text-sm">
                    Manage Comments
                </a>
                <x-nav-link href="{{ url('http://127.0.0.1:8000/chatify') }}">
                    {{ __('Chat') }}
                </x-nav-link>
                <a href="{{ url('http://127.0.0.1:8000/dashboard') }}"
                    class="text-gray-700 hover:text-gray-900 text-sm">
                    Dashboard
                </a>
            @endauth
        </div>
    </div>
</nav>

<!-- Script to toggle mobile menu visibility -->
<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    document.getElementById('mobile-menu-close').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.add('hidden');
    });
</script>
