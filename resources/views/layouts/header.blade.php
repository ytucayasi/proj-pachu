<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen  max-w-8xl mx-auto">

        <header class="flex justify-between p-4">
            <a href="#">
                <img class="w-48 rounded-lg" src="{{ asset('images/logo.png') }}" alt="Imagen">
            </a>
            <ul class="flex space-x-4 items-center">
                <li><a href=""><x-heroicon-o-chat-bubble-bottom-center-text
                            class="w-6 h-6 text-neutral-500 hover:text-neutral-800" /></a></li>
                <li><a href=""><x-heroicon-o-at-symbol class="w-6 h-6 text-neutral-500 hover:text-neutral-800" /></a>
                </li>
                <li><a href=""><x-heroicon-o-arrow-right-end-on-rectangle
                            class="w-6 h-6 text-neutral-500 hover:text-neutral-800" /></a></li>
            </ul>
        </header>
        <nav>
            <ul class="flex flex-wrap space-x-8 justify-center items-center text-xl bg-neutral-700 text-white py-6">
                <li>
                    <a class="inline-block px-2 py-1 text-white transition-transform transform-scale-125 hover:scale-110 hover:bg-[#e87b1d]"
                        href="/">
                        Inicio
                    </a>
                </li>
                <li>
                    <a class="inline-block px-2 py-1 text-white transition-transform transform-scale-125 hover:scale-110 hover:bg-[#e87b1d]"
                        href="/nosotros">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a class="inline-block px-2 py-1 text-white transition-transform transform-scale-125 hover:scale-110 hover:bg-[#e87b1d]"
                        href="/servicios">
                        Servicios
                    </a>
                </li>
                <li>
                    <a class="inline-block px-2 py-1 text-white transition-transform transform-scale-125 hover:scale-110 hover:bg-[#e87b1d]"
                        href="/proyectos">
                        Proyectos
                    </a>
                </li>
                <li>
                    <a class="inline-block px-2 py-1 text-white transition-transform transform-scale-125 hover:scale-110 hover:bg-[#e87b1d]"
                        href="/contacto">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>