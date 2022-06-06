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
<body class="flex flex-col font-sans antialiased h-screen">

<header class="" x-data="{ open: false } ">
    <div class="flex justify-center">
        <x-application-logo class="h-24 lg:h-full"/>
    </div>

    <nav class="bg-white tracking-wider">
        <div class=" mx-auto">
            <div class="flex justify-between border-y border-gray-400 h-16">
                <div class="flex mx-auto">
                    <div class="hidden sm:ml-6 md:flex sm:space-x-8 font-Ogg font-bold">
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
                </div>

                <div class="-mr-2 flex items-center md:hidden px-4 md:px-0">

                    <button type="button"
                            id="menu-button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-controls="mobile-menu"
                            aria-expanded="false"
                            @click="open = ! open"
                    >
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6"
                             id="menu-icon-y"
                             x-show="!open"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>

                        <svg class="block h-6 w-6"
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

<footer class="flex flex-col border-t border-gray-300 tracking-wider text-black">
    <div class="flex px-3 sm:px-4 my-4">

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
{{--            <x-application-logo class="max-w-xl h-24"/>--}}
        </div>
    </div>

    <div class="flex border-t border-gray-300 justify-center align-middle w-full font-Ogg font-light text-sm py-2 lg:py-4">
        <p>© 2022 5m2 Collective. All Rights reserved. <br class="lg:hidden">* Privacy Policy</p>
    </div>
</footer>
</body>
</html>
