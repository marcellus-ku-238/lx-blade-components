@props([
    'disabled' => false,
    'color' => 'indigo',
])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'rows' => '4',
    'class' => 'shadow-sm block w-full  focus:border-' . $color . '-500 sm:text-sm border border-gray-300 rounded-md',
]) !!}>
    {{ $slot }}
</textarea>

@if (Arr::has($attributes, 'wire:model'))
    @error($attributes['wire:model'])
        <span class="text-sm font-medium text-red-700 error">{{ $message }}</span>
    @enderror
@endif
