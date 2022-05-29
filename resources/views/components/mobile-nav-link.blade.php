@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-[#E3F5FF] border-[#b3e4ff] text-[#005d91] block pl-3 pr-4 py-2 border-l-4 text-base font-medium'
                : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300
                hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
