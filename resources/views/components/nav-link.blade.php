@props(['active', 'navigate'])

@php
    $classes = $active ?? false ? 'inline-flex font-bold items-center hover:text-yellow-900 text-lg text-yellow-500' : 'inline-flex font-bold items-center hover:text-yellow-900 text-lg text-gray-500';
@endphp

<a {{ $navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
