@props([
    'sortable' => null,
    'diraction' => null,
])

<th {{ $attributes->merge([
        'class' => 'px-6 py-3 bg-gray-50',
    ])->only('class') }}>
    @unless($sortable)
        <span class="text-left text-xs leading-4 font-medium text-gray-200 uppercase tracking-wider">
            {{ $slot }}
        </span>
    @else
        <button {{ $attributes->except('class') }}
            class="flex items-center space-x-1 text-left text-xs leading-4 font-medium">
            <span>{{ $slot }}</span>
            <span>
                @if ($direction === 'asc')
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                @elseif($direction == 'desc')
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                    </svg>
                @endif
            </span>
        </button>
    @endunless
</th>
