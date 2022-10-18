@props([
    'disabled' => false,
    'color' => 'indigo',
])

<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'focus:ring-{{ $color }}-500 h-4 w-4 text-{{ $color }}-600 border-gray-300 rounded',
]) !!}>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="text-sm font-medium text-red-700 error">{{ $message }}</span>
    @enderror
@endif
