@props([
    'type' => 'radio',
    'name' => '',
    'id' => '',
    'value' => '',
    'checked' => false,
    'label' => '',
])
<input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}"
    @if ($checked) checked @endif>
{{ $label }}
