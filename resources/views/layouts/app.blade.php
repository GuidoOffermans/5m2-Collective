<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body class="flex flex-col font-sans antialiased">

<header class="md:sticky top-0 z-40 w-full" x-data="{ open: false } ">
    <div class="flex justify-center bg-white">
        <x-application-logo />
    </div>

    <nav class="bg-white tracking-wider">
        <div class="mx-auto">
            <div class="flex justify-between justify-items-center border-y border-gray-400 h-16">
                <div class="hidden md:flex w-3/4 md:justify-between font-Ogg font-bold mx-auto">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('find-a-studio')" :active="request()->routeIs('find-a-studio')">
                        {{ __('Find a Studio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('share-a-studio')" :active="request()->routeIs('share-a-studio')">
                        {{ __('Share a Studio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('stammtisch')" :active="request()->routeIs('stammtisch')">
                        {{ __('Stammtisch') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link :href="route('collective')" :active="request()->routeIs('collective')">
                        {{ __('Collective') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>

                <div class="-mr-2 flex items-center md:hidden px-4 md:px-0 ml-auto">
                    <img
                        src="{{asset('/images//icons/logo.jpg')}}"
                        class="md:hidden flex w-2/3 py-8 mr-auto"
                     alt=""
                    >
                    <button type="button"
                            id="menu-button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400
                            hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-100"
                            aria-controls="mobile-menu"
                            aria-expanded="false"
                            @click="open = ! open"
                    >
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-9 w-9"
                             id="menu-icon-y"
                             x-show="!open"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>

                        <svg class="block h-9 w-9"
                             id="menu-icon-x"
                             x-show="open"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="open" x-transition class="md:hidden" id="mobile-menu">

            <div class="pt-2 pb-3 space-y-1">
                <x-mobile-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('find-a-studio')" :active="request()->routeIs('find-a-studio')">
                    {{ __('Find a Studio') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('share-a-studio')" :active="request()->routeIs('share-a-studio')">
                    {{ __('Share a Studio') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('stammtisch')" :active="request()->routeIs('stammtisch')">
                    {{ __('Stammtisch') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('projects')" :active="request()->routeIs('projects')">
                    {{ __('Projects') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('collective')" :active="request()->routeIs('collective')">
                    {{ __('Collective') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-mobile-nav-link>

            </div>
        </div>
    </nav>
</header>

<main class="mb-auto">
    @yield('content')
</main>

<footer class="flex flex-col border-t border-gray-300 tracking-wider text-black z-40 bg-white">
    <div class="flex px-3 sm:px-4 my-4 lg:w-3/4 lg:mx-auto">

        <nav class="flex flex-row text-xl lg:w-1/3 justify-between">
            <div class="flex flex-col space-y-2 text-base font-Ogg ">
                <a href="{{route('home')}}">
                    {{ __('Home') }}
                </a>
                <a href="{{route('about')}}">
                    {{ __('About') }}
                </a>
                <a href="{{route('find-a-studio')}}">
                    {{ __('Find a Studio') }}
                </a>
                <a href="{{route('share-a-studio')}}">
                    {{ __('Share a Studio') }}
                </a>
                <a href="{{route('stammtisch')}}">
                    {{ __('Stammtisch') }}
                </a>
                <a href="{{route('projects')}}">
                    {{ __('Projects') }}
                </a>
                <a href="{{route('collective')}}">
                    {{ __('Collective') }}
                </a>
                <a href="{{route('contact')}}">
                    {{ __('Contact') }}
                </a>
                <a href="https://instagram.com/5m2collective" class="md:hidden">
                    Instagram
                </a>
            </div>

            <div class="hidden md:flex flex-col w-1/2 space-y-2 text-base font-Ogg">
                <p>Follow us!</p>
                <a href="https://instagram.com/5m2collective" class="hover:drop-shadow-lg">
                    <img src="{{url('/images/icons/instagram-icon.png')}}" alt="instagram link" class="h-8"/>
                </a>
            </div>

        </nav>
        <div class="w-2/3 h-20 ">
        </div>
    </div>

    <div
        class="flex border-t border-gray-300 justify-center align-middle w-full font-Ogg font-light text-sm py-2 lg:py-4">
        <p>© 2022 5m2 Collective. All Rights reserved. <br class="lg:hidden">* Privacy Policy</p>
    </div>
</footer>
</body>
</html>
