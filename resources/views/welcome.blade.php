<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alta Consulting</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tailwind CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Livewire Script -->
        @livewireStyles

        <!-- Alphine JS. -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased">

                @livewire('hero-section')
                @livewire('services-section')
                @livewire('about-section')
                @livewire('contact-section')
                @livewire('blog-section')
                @livewire('a-p-i.times')

        @livewireStyles
    </body>
</html>