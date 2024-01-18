<div class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div class="text-gray-600 flex items-center space-x-2">
            @if ($this->activeCategory || $search)
                <button class="mr-3 text-xs gray-500 hover:text-red-500 transition duration-300" wire:click="clearFilters()">X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge wire:navigate href="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}"
                    :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color"
                    class="hover:bg-gray-200 transition duration-300">
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
            @if ($search)
                <span class="ml-2">
                    {{ __('blog.containing') }} : <strong>{{ $search }}</strong>
                </span>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light">
            <x-checkbox wire:model.live="popular" class="hover:text-indigo-500 transition duration-300" />
            <x-label class="cursor-pointer hover:text-indigo-500 transition duration-300"> {{ __('blog.popular') }} </x-label>
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4 hover:text-indigo-500 transition duration-300"
                wire:click="setSort('desc')"> {{ __('blog.latest') }}</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4 hover:text-indigo-500 transition duration-300"
                wire:click="setSort('asc')"> {{ __('blog.oldest') }}</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item wire:key="{{ $post->id }}" :post="$post" class="hover:shadow-md transition duration-300" />
        @endforeach
    </div>

    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
