<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body class=" flex flex-col font-sans antialiased h-screen">

<header class="">
    <div class="flex justify-center">
        <x-application-logo/>
    </div>

    {{--            <nav class="border-y border-gray-400 flex justify-around align-middle h-12">--}}
    {{--                <div class="flex flex-row justify-between align-middle w-1/2">--}}
    <nav class="bg-white">
        <div class=" mx-auto ">
            <div class="flex justify-between border-y border-gray-400 h-16">
                <div class="flex mx-auto">
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('atelier-spaces')" :active="request()->routeIs('atelier-spaces')">
                            {{ __('Atelier Spaces') }}
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

                <div class="-mr-2 flex items-center sm:hidden px-4 md:px-0">
                    <!-- Mobile menu button -->
                    <button type="button"
                            id="menu-button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-controls="mobile-menu"
                            aria-expanded="false"
                            onclick=""
                    >
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6"
                             id="menu-icon-y"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>

                        <svg class="hidden h-6 w-6"
                             id="menu-icon-x"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden sm:hidden" id="mobile-menu">

            <div class="pt-2 pb-3 space-y-1">
                <x-mobile-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-mobile-nav-link>
                <x-mobile-nav-link :href="route('atelier-spaces')" :active="request()->routeIs('atelier-spaces')">
                    {{ __('Atelier Spaces') }}
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

            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">

                </div>

            </div>
        </div>
    </nav>


    {{--            <nav class="border-y border-gray-400 flex justify-around align-middle h-12">--}}
    {{--                <div class="flex flex-row justify-between align-middle w-1/2">--}}
    {{--                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">--}}
    {{--                        {{ __('Home') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                    <x-nav-link :href="route('atelier-spaces')" :active="request()->routeIs('atelier-spaces')">--}}
    {{--                        {{ __('Atelier Spaces') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                    <x-nav-link :href="route('stammtisch')" :active="request()->routeIs('stammtisch')">--}}
    {{--                        {{ __('Stammtisch') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                    <x-nav-link :href="route('projects')" :active="request()->routeIs('projects')">--}}
    {{--                        {{ __('Projects') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                    <x-nav-link :href="route('collective')" :active="request()->routeIs('collective')">--}}
    {{--                        {{ __('Collective') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">--}}
    {{--                        {{ __('About') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">--}}
    {{--                        {{ __('Contact') }}--}}
    {{--                    </x-nav-link>--}}
    {{--                </div>--}}
    {{--            </nav>--}}
</header>

<main class="mb-auto">
    @yield('content')
</main>

<footer class="flex flex-col justify-center justify-items-center items-center border-t border-gray-300">
    <div class="flex w-3/4 my-6">
        <nav class="flex flex-row text-xl w-1/3 justify-between">
            <div class="flex flex-col space-y-2">
                <a href="{{route('home')}}">
                    {{ __('Home') }}
                </a>
                <a href="{{route('home')}}">
                    {{ __('About') }}
                </a>
                <a href="{{route('home')}}">
                    {{ __('Atelier spaces') }}
                </a>
                <a href="{{route('home')}}">
                    {{ __('Stammtisch') }}
                </a>
                <a href="{{route('home')}}">
                    {{ __('Projects') }}
                </a>
                <a href="{{route('collective')}}">
                    {{ __('Collective') }}
                </a>
                <a href="{{route('contact')}}">
                    {{ __('Contact') }}
                </a>
            </div>
            <div class="flex flex-col w-1/2 space-y-2">
                <p>Follow us!</p>
                <a href="https://instagram.com/5m2collective">
                    <img src="{{url('/images/instagram.png')}}" alt="instagram link" class="h-8"/>
                </a>
            </div>
        </nav>
        <div class="w-2/3 h-20 ">
            <x-application-logo class="max-w-xl h-24"/>
        </div>
    </div>

    <div class="flex border-t border-gray-300 justify-center align-middle w-full">
        <p>© 2022 5m2 Collective. All Rights reserved. * Privacy Policy</p>
    </div>
</footer>
<script>
    $('#menu-button').click(function () {
        $('#mobile-menu').toggle();
        $('#menu-icon-x').toggle();
        $('#menu-icon-y').toggle();
    });
</script>
</body>
</html>
