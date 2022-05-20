<nav class="">

    <div class="">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class=""/>
        </a>
    </div>

    <div class="border-y border-black flex flex-row">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
            {{ __('About') }}
        </x-nav-link>
        <x-nav-link :href="route('atelier-spaces')" :active="request()->routeIs('atelier-spaces')">
            {{ __('Atelier spaces') }}
        </x-nav-link>
        <x-nav-link :href="route('stammtisch')" :active="request()->routeIs('stammtisch')">
            {{ __('Stammtisch') }}
        </x-nav-link>
        <x-nav-link :href="route('events')" :active="request()->routeIs('events')">
            {{ __('Events') }}
        </x-nav-link>
        <x-nav-link :href="route('portraits')" :active="request()->routeIs('portraits')">
            {{ __('Portraits') }}
        </x-nav-link>
        <x-nav-link :href="route('kontakt')" :active="request()->routeIs('kontakt')">
            {{ __('Kontakt') }}
        </x-nav-link>
    </div>
</nav>
