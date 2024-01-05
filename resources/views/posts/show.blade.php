<x-app-layout :title="$post->title">
    <article class="w-full py-5 mx-auto mt-10 max-w-xl">
        <img class="w-full my-2 rounded-lg" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
        <h1 class="text-3xl md:text-4xl font-bold text-left text-gray-800">
            {{ $post->title }}
        </h1>
        <div class="flex flex-col md:flex-row items-center justify-between mt-2">
            <div class="flex items-center py-2">
                <x-posts.author :author="$post->author" size="sm" />
                <span class="text-sm text-gray-500">| {{ $post->getReadingTime() }} min read</span>
            </div>
            <div class="flex items-center py-2 md:py-0">
                <span class="mr-2 text-gray-500">{{ $post->published_at->diffForHumans() }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                    stroke="currentColor" class="w-4 h-4 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div class="flex flex-col items-center md:flex-row md:justify-between px-2 py-4 my-6 text-sm border-t border-b border-gray-100 article-actions-bar">
            <div class="flex items-center justify-center">
                <livewire:like-button :key="'like-' . $post->id" :$post />
            </div>
            <div class="flex items-center mt-4 md:mt-0">
                <!-- Additional content or actions -->
            </div>
        </div>

        <div class="py-3 text-base md:text-lg prose text-justify text-gray-800 article-content">
            {!! $post->body !!}
        </div>

        <div class="flex flex-wrap items-center justify-center mt-6 space-x-2 md:space-x-4">
            @foreach ($post->categories as $category)
                <x-posts.category-badge :category="$category" />
            @endforeach
        </div>

        <livewire:post-comments :key="'comments' . $post->id" :$post />
    </article>
</x-app-layout>
