@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'shadow-sm block w-full  focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md',
]) !!}>
    {{ $slot }}
</textarea>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="error text-sm font-medium text-red-700">{{ $message }}</span>
    @enderror
@endif
