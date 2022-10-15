@props([
    'color' => 'indigo',
])

<!--
    NOTE: This component uses alpineJs to improve user interaction.
          Please add alpineJS if you are using livewire 2.
          If you are using livewire 3, you'll just install Livewire and 
          everything you need is automatically injected - including Alpine!
-->

<div x-data='{
    open: false
}'>
    <button x-on:click="open = !open" type="button" {!! $attributes->merge([
        'class' => 'relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors
                    ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-' . $color . '-500 bg-' . $color . '-600',
    ]) !!}
        :class="{ 'bg-slate-400 shadow-md ': open == true }">
        {{ $slot }}
        <span :class="open ? 'transition translate-x-5' : 'transition translate-x-0'"
            class="pointer-events-none h-5 w-5 rounded-full bg-white shadow transform ring-0 duration-200"
            aria-hidden="true"></span>
    </button>
</div>
