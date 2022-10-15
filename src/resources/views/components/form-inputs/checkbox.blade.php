@props(['disabled' => false])

<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded',
]) !!}>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
    @enderror
@endif
