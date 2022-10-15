@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5',
]) !!}>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
    @enderror
@endif
