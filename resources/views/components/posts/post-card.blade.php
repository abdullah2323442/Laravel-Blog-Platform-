@props(['post'])

<div {{ $attributes }} class="bg-gradient-to-br from-blue-500 via-blue-700 to-indigo-500 rounded-xl overflow-hidden shadow-lg border-4 border-transparent transition-all hover:shadow-2xl transform hover:scale-105 duration-300">
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}" class="relative overflow-hidden">
        <img class="w-full h-64 object-cover rounded-t-xl transition-transform transform hover:scale-110 duration-300"
            src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}">
        <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity opacity-0 hover:opacity-100 flex items-center justify-center">
            <p class="text-white font-semibold text-lg transform hover:scale-110 transition-transform duration-300">
                View Details
            </p>
        </div>
    </a>
    <div class="p-4">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($category = $post->categories->first())
                <x-posts.category-badge :category="$category" class="transition-transform transform hover:scale-110 duration-300" />
            @endif
            <p class="text-sm text-gray-500 transition-opacity opacity-70 hover:opacity-100 duration-300">
                {{ $post->published_at->format('M d, Y') }}
            </p>
        </div>
        <a wire:navigate href="{{ route('posts.show', $post->slug) }}"
            class="text-2xl font-bold text-gray-900 hover:text-indigo-500 transition-colors duration-300 transform hover:scale-105 transition-transform duration-300">
            {{ $post->title }}
        </a>
    </div>
</div>
