<footer class="flex flex-wrap items-center justify-between px-4 py-4 text-sm border-t border-gray-100 bg-gray-100">
    <div class="flex space-x-4 transition-transform transform hover:scale-110">
        @foreach (config('app.supported_locales') as $locale => $data)
            <a href="{{ route('locale', $locale) }}" class="hover:text-indigo-500 transition-colors duration-300">
                <x-dynamic-component :component="'flag-country-' . $data['icon']" class="w-6 h-6" />
            </a>
        @endforeach
    </div>

    <div class="flex-grow text-center">
        <span class="text-gray-600 hover:text-indigo-500 transition-colors duration-300">&copy; {{ date('Y') }} InkByte. {{ __('All rights reserved.') }}</span>
    </div>
</footer>

