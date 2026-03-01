@props([
    'label',
    'name',
    'id' => null,
    'placeholder' => null,
    'required' => false,
    'errorBag' => 'default',
])

@php
    $textareaId = $id ?? str_replace(['[', ']', '.'], '_', $name);
    $bag = $errors->getBag($errorBag);
    $errorMessage = $bag->first($name);
    $describedBy = $errorMessage !== '' ? $textareaId.'-error' : null;
@endphp

<label {{ $attributes->class(['field']) }}>
    <span>
        {{ $label }}
        @if ($required)
            <span aria-hidden="true">*</span>
        @endif
    </span>
    <textarea
        id="{{ $textareaId }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        aria-required="{{ $required ? 'true' : 'false' }}"
        aria-invalid="{{ $errorMessage !== '' ? 'true' : 'false' }}"
        @if ($describedBy) aria-describedby="{{ $describedBy }}" @endif
        @required($required)
    >{{ $slot }}</textarea>

    @if ($errorMessage !== '')
        <small id="{{ $textareaId }}-error" class="field-error" role="alert">{{ $errorMessage }}</small>
    @endif
</label>
