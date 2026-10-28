@props([
    'variant' => 'success', //jika tidak didefinisikan
    'type' => '', //bawaan dari native html
])
<button type="{{ $type }}" class="btn btn-{{ $variant }}">
    {{ $slot }}
</button>
