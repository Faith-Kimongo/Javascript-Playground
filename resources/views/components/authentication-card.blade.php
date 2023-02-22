<div class="min-h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

    <div class="text-2xl p-4 font-bold leading-7 text-gray-700 sm:truncate sm:text-3xl sm:tracking-tight">
        {{ $header }}
    </div>
    <div class="w-full sm:max-w-md mt-2 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
