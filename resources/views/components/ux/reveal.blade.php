@props([
    'tag' => 'div',
    'delay' => null,
])

@php
    $element = is_string($tag) && $tag !== '' ? $tag : 'div';
    $delayStyle = $delay !== null ? 'transition-delay: '.$delay.'ms;' : null;
@endphp

<{{ $element }} {{ $attributes->class(['reveal']) }} @style([$delayStyle])>
    {{ $slot }}
</{{ $element }}>
