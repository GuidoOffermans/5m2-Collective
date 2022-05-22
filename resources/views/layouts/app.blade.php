<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class=" flex flex-col font-sans antialiased h-screen">

<header class="">
    <div class="flex justify-center">
        <x-application-logo/>
    </div>

    <nav class="border-y border-gray-400 flex flex-row justify-around align-middle h-12">
        <x-nav-link :href="route('home')" class="ml-10">
            <x-arrow class="m-1"/> {{ __('Zurück') }}
        </x-nav-link>
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
            {{ __('About') }}
        </x-nav-link>
        <x-nav-link :href="route('atelier-spaces')" :active="request()->routeIs('atelier-spaces')">
            {{ __('Atelier Spaces') }}
        </x-nav-link>
        <x-nav-link :href="route('stammtisch')" :active="request()->routeIs('stammtisch')">
            {{ __('Stammtisch') }}
        </x-nav-link>
        <x-nav-link :href="route('events')" :active="request()->routeIs('events')">
            {{ __('Events') }}
        </x-nav-link>
        <x-nav-link :href="route('collective')" :active="request()->routeIs('collective')">
            {{ __('Collective') }}
        </x-nav-link>
        <x-nav-link :href="route('kontakt')" :active="request()->routeIs('kontakt')" class="mr-10">
            {{ __('Kontakt') }}
        </x-nav-link>
    </nav>
</header>

<main class="mb-auto">
    @yield('content')
</main>

<footer class="flex flex-row justify-center justify-items-center border-t border-gray-300 py-5 text-sm">
    <nav class="flex flex-row mr-16">
        <div class="flex flex-col">
            <a :href="route('home')">
                {{ __('Home') }}
            </a>
            <a :href="route('about')">
                {{ __('About') }}
            </a>
            <a :href="route('atelier-spaces')">
                {{ __('Atelier spaces') }}
            </a>
            <a :href="route('stammtisch')">
                {{ __('Stammtisch') }}
            </a>
            <a :href="route('events')">
                {{ __('Events') }}
            </a>
            <a :href="route('portraits')">
                {{ __('Portraits') }}
            </a>
            <a :href="route('kontakt')">
                {{ __('Kontakt') }}
            </a>
        </div>
    </nav>

    <div class="flex flex-col mr-16">
        <a :href="route('home')">
            {{ __('Follow') }}
        </a>

    </div>

    <x-application-logo class="h-20"/>
</footer>
</body>
</html>
