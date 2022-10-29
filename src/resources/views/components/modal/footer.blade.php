@props([
    'show' => false,
    'color' => 'indigo'
])

<div class="flex justify-between p-6 space-x-2">
    {{ $slot }}
    <button x-on:click="show = false" {!! $attributes->merge([
        'class' =>
            'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium font-bold rounded-md text-white bg-' .
            $color .
            '-600 hover:bg-' .
            $color .
            '-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-' .
            $color .
            '-500',
    ]) !!}>Close</button>
</div>
