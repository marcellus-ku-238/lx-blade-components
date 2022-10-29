@props([
    'position' => 'center',
    'svg' => true,
    'type' => 'warning',
])

<div class="relative">
    <div @class([
        'absolute',
        'top-20 right-20' => $position == 'right',
        'top-20 left-20' => $position == 'left',
        'top-20 left-1/2 transform -translate-x-1/2 -translate-y-1/2' =>
            $position == 'center',
    ])>
        <div class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white rounded-lg shadow top-10 right-10"
            role="alert" x-data="{ show: false, message: 'Data saved.' }" x-on:notify.window="show = true; message = $event.detail" x-show="show"
            x-transition:enter="transition ease-in-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-x-100 -translate-y-16"
            x-transition:enter-end="opacity-100 transform scale-x-100 translate-y-0"
            x-transition:leave="transition ease-in-out duration-300"
            x-transition:leave-start="opacity-100 transform scale-x-100 -translate-x-0"
            x-transition:leave-end="opacity-0 transform scale-x-100 translate-x-16">
            @if (!empty($svg))
                <div @class([
                    'inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg',
                    'text-green-500 bg-green-100' => $type == 'success',
                    'text-red-500 bg-red-100' => $type == 'failed',
                    'text-blue-500 bg-blue-100' => $type == 'warning',
                ])>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" @class([
                            'w-6 h-6',
                            'text-green-400' => $type == 'success',
                            'text-red-400' => $type == 'failed',
                            'text-blue-400' => $type == 'warning',
                        ])>
                        @if ($type == 'success')
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        @endif
                        @if ($type == 'failed')
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        @endif
                        @if ($type == 'warning')
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        @endif
                    </svg>
                </div>
            @endif
            <div x-text="message" class="ml-3 text-sm font-normal"></div>
            <button type="button" x-on:click="show = false"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 "
                data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
