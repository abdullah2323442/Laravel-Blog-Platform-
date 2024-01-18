<x-app-layout title="Home Page">
    @section('hero')
        <div class="w-full py-32 text-center bg-gradient-to-r from-indigo-500 to-purple-500">
            <h1 class="text-3xl font-bold text-center text-white md:text-5xl cursor-text">
                {{ __('home.hero.title') }} <span class="text-white">InkByte</span>
            </h1>
            <p class="mt-2 text-xl text-white">{{ __('home.hero.desc') }}</p>
            <a class="inline-block px-5 py-3 mt-5 text-lg font-bold text-indigo-500 bg-white rounded-full"
                href="{{ route('posts.index') }}">
                {{ __('home.hero.cta') }}</a>
        </div>
    @endsection

    <div class="w-full mb-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-4xl font-bold text-indigo-500"> {{ __('home.featured_posts') }} </h2>
            <div class="w-full">
                <div class="grid w-full grid-cols-3 gap-10">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="col-span-3 md:col-span-1 shadow-lg rounded-lg" />
                    @endforeach
                </div>
            </div>
            <a class="block mt-10 text-lg font-semibold text-center text-indigo-500" href="{{ route('posts.index') }}">
                {{ __('home.more_posts') }}</a>
        </div>
        <hr class="border-indigo-500">

        <h2 class="mt-16 mb-5 text-4xl font-bold text-indigo-500">{{ __('home.latest_posts') }}</h2>
        <div class="w-full mb-5">
            <div class="grid w-full grid-cols-3 gap-10">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" class="col-span-3 md:col-span-1 shadow-lg rounded-lg" />
                @endforeach
            </div>
        </div>
        <a class="block mt-10 text-lg font-semibold text-center text-indigo-500" href="{{ route('posts.index') }}">
            {{ __('home.more_posts') }}</a>
    </div>
</x-app-layout>
