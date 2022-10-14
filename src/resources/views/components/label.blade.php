@props(['value'])

<label {{ $attributes->merge(['block text-gray-600 text-sm font-medium mb-2']) }}>
    {{ $value ?? $slot }}
</label>
