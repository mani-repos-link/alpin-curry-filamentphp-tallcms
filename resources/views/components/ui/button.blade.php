@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
])

@php
    $variantClass = $variant === 'ghost' ? 'btn-ghost' : 'btn-primary';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class(['btn', $variantClass]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->class(['btn', $variantClass]) }}>
        {{ $slot }}
    </button>
@endif
