<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajiry - We Work</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        {{-- Tailwind css --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
  
    <x-navigation.header></x-navigation.header>

    {{-- Render pages here --}}
    <main>
        {{-- Pages that you create and reuse will be injected --}}
        {{ $slot }}
    </main>
    <x-navigation.footer></x-navigation.footer>
</body>
</html>
