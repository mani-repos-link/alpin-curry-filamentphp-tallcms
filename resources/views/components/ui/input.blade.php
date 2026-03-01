@props([
    'label',
    'name',
    'id' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'autocomplete' => null,
    'inputmode' => null,
    'required' => false,
    'errorBag' => 'default',
])

@php
    $inputId = $id ?? str_replace(['[', ']', '.'], '_', $name);
    $bag = $errors->getBag($errorBag);
    $errorMessage = $bag->first($name);
    $describedBy = $errorMessage !== '' ? $inputId.'-error' : null;
@endphp

<label {{ $attributes->class(['field']) }}>
    <span>
        {{ $label }}
        @if ($required)
            <span aria-hidden="true">*</span>
        @endif
    </span>
    <input
        id="{{ $inputId }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        @if ($inputmode) inputmode="{{ $inputmode }}" @endif
        aria-required="{{ $required ? 'true' : 'false' }}"
        aria-invalid="{{ $errorMessage !== '' ? 'true' : 'false' }}"
        @if ($describedBy) aria-describedby="{{ $describedBy }}" @endif
        @required($required)
    >

    @if ($errorMessage !== '')
        <small id="{{ $inputId }}-error" class="field-error" role="alert">{{ $errorMessage }}</small>
    @endif
</label>
