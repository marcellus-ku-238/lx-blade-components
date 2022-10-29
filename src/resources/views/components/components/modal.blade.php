@props(['id', 'size' => 'md', 'position' => 'center', 'show'])

@php
    $id = $id ?? str()->uuid();
@endphp

<div x-data="{
    show: '{{ $show ?? false }}'
}" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show"
    id="{{ $id }}">
    <div x-show="show" class="fixed inset-0 transition-all transform" x-on:click="show = false"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" @class([
            'fixed mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto',
            'sm:max-w-md' => $size == 'sm',
            'md:max-w-lg' => $size == 'md',
            'lg:max-w-4xl' => $size == 'lg',
            'xl:max-w-7xl' => $size == 'xl',
            'left-16 top-16' => $position == 'top-left',
            'right-16 top-16' => $position == 'top-right',
            'bottom-16 right-16' => $position == 'bottom-right',
            'bottom-16 left-16' => $position == 'bottom-left',
            'top-1/4 right-0 left-0' => $position == 'center',
        ])>
        <div @class(['divide-y-2'])>

            @if (!empty($header))
                <div @class(['text-lg'])>
                    {{ $header }}
                </div>
            @endif


            {{ $content ?? '' }}


            @if (!empty($footer))
                <div class="flex flex-row justify-end text-right bg-gray-100">
                    {{ $footer }}
                </div>
            @endif

        </div>

    </div>
</div>
