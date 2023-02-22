<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex w-full justify-center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-900 focus:ring-offset-2']) }}>
    {{ $slot }}
</button>
