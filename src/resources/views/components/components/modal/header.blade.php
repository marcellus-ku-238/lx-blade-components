@props([
    'show' => false,
])

<div class="flex justify-between p-6">
    <h3 class="font-black text-gray-500">{{ $slot }}</h3>
    <button x-on:click="show = false">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
