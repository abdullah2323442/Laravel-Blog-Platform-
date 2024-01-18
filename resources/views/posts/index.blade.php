<x-app-layout title="Blog">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="col-span-1 md:col-span-3 border-r-2 border-gray-300 p-4">
            <livewire:post-list />
        </div>
        <div id="side-bar" class="sticky top-0 h-screen col-span-1 bg-white p-6 border-t-2 md:border-t border-gray-300 shadow-md">
            <div class="mb-6">
                @include('posts.partials.search-box')
            </div>

            <div>
                @include('posts.partials.categories-box')
            </div>
        </div>
    </div>
</x-app-layout>
