@props(['value'])

<label {{ $attributes->merge(['block font-medium text-sm text-gray-700 block text-gray-700 font-bold']) }}>
    {{ $value ?? $slot }}
</label>
