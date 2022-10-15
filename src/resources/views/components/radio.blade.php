@props(['disabled' => false])

<div class="flex space-x-2">
    <input type="radio" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-primary-500 border-2 border-primary-500 focus:ring-primary-500 h-5 w-5 rounded-full',
    ]) !!}>
</div>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
    @enderror
@endif
