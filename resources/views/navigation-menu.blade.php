<nav class="flex items-center justify-between px-6 py-3 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-mark />
        </a>
        <div class="ml-10 top-menu">
            <div class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('menu.home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('menu.blog') }}
                </x-nav-link>
                @auth
                    <x-nav-link href="{{ url('http://127.0.0.1:8000/admin/posts') }}">
                        {{ __('Manage Post') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('http://127.0.0.1:8000/admin/comments') }}">
                        {{ __('Manage Comments') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('http://127.0.0.1:8000/chatify') }}">
                        {{ __('Chat') }}
                    </x-nav-link>
                    <x-nav-link href="{{ url('http://127.0.0.1:8000/admin') }}">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                @endauth
            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>
