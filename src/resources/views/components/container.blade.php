@props([
    'isCentered' => true,
])

<div @class(['container p-8', 'mx-auto' => $isCentered])>
    {{ $slot }}
</div>
