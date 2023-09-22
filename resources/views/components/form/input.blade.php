@php
    $computed = $attributes->whereStartsWith('wire:model')->first();
    $error    = $errors->has($computed);
    $baseIcon = $baseIcon();
@endphp

<x-taste-ui::form.wrapper.input :$computed :$error :$label :$hint>
    @if ($icon)
        <div @class($baseIcon['base'])>
            <x-icon :$icon :$error style="{{ $baseIcon['style'] }}" @class($baseIcon['size']) />
        </div>
    @endif

    <input @if ($id) id="{{ $id }}" @endif {{ $attributes->class($baseClass($error)) }}>
</x-taste-ui::form.wrapper.input>