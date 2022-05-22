<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="h-full overflow-hidden">

{{--<header class="">--}}
{{--    <div class="flex justify-center">--}}
{{--        <x-application-logo/>--}}
{{--    </div>--}}

{{--    <nav class="border-y border-gray-400 flex flex-row justify-around align-middle h-12">--}}
{{--        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">--}}
{{--            {{ __('Home') }}--}}
{{--        </x-nav-link>--}}
{{--        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">--}}
{{--            {{ __('About') }}--}}
{{--        </x-nav-link>--}}
{{--        <x-nav-link :href="route('atelier-spaces')" :active="request()->routeIs('atelier-spaces')">--}}
{{--            {{ __('Atelier Spaces') }}--}}
{{--        </x-nav-link>--}}
{{--        <x-nav-link :href="route('stammtisch')" :active="request()->routeIs('stammtisch')">--}}
{{--            {{ __('Stammtisch') }}--}}
{{--        </x-nav-link>--}}
{{--        <x-nav-link :href="route('events')" :active="request()->routeIs('events')">--}}
{{--            {{ __('Events') }}--}}
{{--        </x-nav-link>--}}
{{--        <x-nav-link :href="route('collective')" :active="request()->routeIs('collective')">--}}
{{--            {{ __('Collective') }}--}}
{{--        </x-nav-link>--}}
{{--        <x-nav-link :href="route('kontakt')" :active="request()->routeIs('kontakt')" class="mr-10">--}}
{{--            {{ __('Kontakt') }}--}}
{{--        </x-nav-link>--}}
{{--    </nav>--}}
{{--</header>--}}

<div class="h-full flex">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 flex z-40">
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">
                <!--
                  Close button, show/hide based on off-canvas menu state.

                  Entering: "ease-in-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in-out duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="absolute top-0 right-0 -mr-12 pt-4">
                    <button type="button"
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="pt-5 pb-4">
                    <div class="flex-shrink-0 flex items-center px-4">
                        <img class="h-8 w-auto"
                             src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                             alt="Workflow">
                    </div>
                    <!-- Mobile sidebar -->
                    <nav aria-label="Sidebar" class="mt-5">
                        <div class="px-2 space-y-1">
                            <a href="#"
                               class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                <!-- Heroicon name: outline/home -->
                                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Home
                            </a>

                            <a href="#"
                               class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                <!-- Heroicon name: outline/fire -->
                                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                                </svg>
                                Trending
                            </a>

                            <a href="#"
                               class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                <!-- Heroicon name: outline/bookmark-alt -->
                                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Bookmarks
                            </a>

                            <a href="#"
                               class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                <!-- Heroicon name: outline/inbox -->
                                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                </svg>
                                Messages
                            </a>

                            <a href="#"
                               class="group p-2 rounded-md flex items-center text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                <!-- Heroicon name: outline/user -->
                                <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Profile
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                    <a href="#" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-10 rounded-full"
                                     src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">Emily
                                    Selman</p>
                                <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">Account
                                    Settings</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:flex lg:flex-shrink-0">
        <div class="flex flex-col w-20">
            <div class="flex-1 flex flex-col min-h-0 overflow-y-auto bg-indigo-600">
                <div class="flex-1">
                    <div class="bg-indigo-700 py-4 flex items-center justify-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                             alt="Workflow">
                    </div>
                    <nav aria-label="Sidebar" class="py-6 flex flex-col items-center space-y-3">
                        <a href="/admin/ateliers" class="flex items-center p-4 rounded-lg text-indigo-200 hover:bg-indigo-700">
                            <!-- Heroicon name: outline/home -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="sr-only">Ateliers</span>
                        </a>

                        <a href="/admin/collective" class="flex items-center p-4 rounded-lg text-indigo-200 hover:bg-indigo-700">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="sr-only">Collective</span>
                        </a>

                        <a href="#" class="flex items-center p-4 rounded-lg text-indigo-200 hover:bg-indigo-700">
                            <!-- Heroicon name: outline/bookmark-alt -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="sr-only">Bookmarks</span>
                        </a>

                        <a href="#" class="flex items-center p-4 rounded-lg text-indigo-200 hover:bg-indigo-700">
                            <!-- Heroicon name: outline/inbox -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                            <span class="sr-only">Messages</span>
                        </a>

                        <a href="#" class="flex items-center p-4 rounded-lg text-indigo-200 hover:bg-indigo-700">
                            <!-- Heroicon name: outline/user -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="sr-only">Profile</span>
                        </a>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex pb-5">
                    <a href="#" class="flex-shrink-0 w-full">
                        <img class="block mx-auto h-10 w-10 rounded-full"
                             src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                        <div class="sr-only">
                            <p>Emily Selman</p>
                            <p>Account settings</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-1 min-w-0 flex flex-col overflow-hidden">
        <!-- Mobile top navigation -->
        <div class="lg:hidden">
            <div class="bg-indigo-600 py-2 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                <div>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                         alt="Workflow">
                </div>
                <div>
                    <button type="button"
                            class="-mr-3 h-12 w-12 inline-flex items-center justify-center bg-indigo-600 rounded-md text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open sidebar</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <main class="flex-1 flex overflow-hidden">
            <!-- Primary column -->
            <section aria-labelledby="primary-heading"
                     class="min-w-0 flex-1 h-full flex flex-col overflow-y-auto lg:order-last ml-8">
                <h1 id="primary-heading" class="sr-only">Account</h1>
                @yield('primary-content')
            </section>

{{--            <!-- Secondary column (hidden on smaller screens) -->--}}
{{--            <aside class=" hidden lg:block lg:flex-shrink-0 lg:order-first">--}}
{{--                <div class="h-full relative flex flex-col w-96 border-r border-gray-200 bg-white overflow-y-auto">--}}
{{--                    @yield('secondary-content')--}}
{{--                </div>--}}
{{--            </aside>--}}
        </main>
    </div>
</div>


<footer class="flex flex-row justify-center justify-items-center border-t border-gray-300 py-5 text-sm">
</footer>
</body>
</html>

