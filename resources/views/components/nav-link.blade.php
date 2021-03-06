@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-4
                border-[#b3e4ff] text-sm leading-5 text-black
                focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out lg:text-lg'
                : 'inline-flex items-center px-1 pt-1 border-b-2
                border-transparent text-sm leading-5 text-[#8D8C8C]
                hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700
                focus:border-gray-300 transition duration-150 ease-in-out lg:text-lg';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
