@props(['value'])

<label
    {{ $attributes->merge([
        'class' => Arr::has($attributes, 'class') ? $attributes['class'] : 'block text-gray-600 text-sm font-medium mb-2',
    ]) }}>
    {{ $value ?? $slot }}
</label>
