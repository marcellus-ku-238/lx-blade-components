@props([
    'disabled' => false,
    'color' => 'indigo',
])

<input type="radio" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'rounded border-gray-300 text-' .
        $color .
        '-600 shadow-sm focus:border-' .
        $color .
        '-300 focus:ring focus:ring-' .
        $color .
        '-200 focus:ring-opacity-50 text-primary-500 border-2 border-primary-500 focus:ring-primary-500 h-5 w-5 rounded-full',
]) !!}>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
    @enderror
@endif
