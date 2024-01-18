<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-transparent hover:bg-indigo-500 text-indigo-700 font-semibold hover:text-white py-2 px-4 border border-indigo-500 hover:border-transparent rounded-full']) }}>
    {{ $slot }}
</button>
