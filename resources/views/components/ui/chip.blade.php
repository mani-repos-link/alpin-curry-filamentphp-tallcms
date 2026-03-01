@props([
    'title',
    'text',
])

<article {{ $attributes->class(['chip']) }}>
    <strong>{{ $title }}</strong>
    <span>{{ $text }}</span>
</article>
