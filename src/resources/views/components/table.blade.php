@props([
    'isSearch' => false,
    'hasFilters' => false,
    'color' => 'indigo'
])

<div x-data="{
    openFilterDrawer: false
}">
    <div class="p-4 m-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <div class="grid grid-cols-1 gap-4">
            <div class="w-full p-4">
                <div class="flex justify-between space-x-3">
                    <div :class="{
                        'w-5/6': openFilterDrawer,
                        'w-full': !openFilterDrawer
                    }"
                        x-transition.duration.5000ms
                        x-transition:enter="transition ease-out-in duration-5000"
                        x-transition:enter-start="opacity-0 transform scale-x-100 translate-x-0"
                        x-transition:enter-end="opacity-100 transform scale-x-0 -translate-x-1/2"
                        x-transition:leave="transition ease-out-in duration-5000"
                        x-transition:leave-start="opacity-100 transform scale-x-0 -translate-x-1/2"
                        x-transition:leave-end="opacity-0 transform scale-x-100 translate-x-0">
                        <div class="flex justify-between">
                            @if ($isSearch)
                                <div class="w-1/3">
                                    {{ $search }}
                                </div>
                            @endif

                            @if ($hasFilters)
                                <div class="grid justify-items-end">
                                    <button class="bg-indigo-500 border border-transparent rounded-md "
                                        x-on:click="openFilterDrawer = !openFilterDrawer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-2 text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div>
                            <div
                                class="mt-6 mb-4 overflow-auto shadow ring-1 ring-black ring-opacity-5 md:mx-0 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            {{ $head }}
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        {{ $body }}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mt-2">
                            {{ $pagination }}
                        </div>
                    </div>

                    <div :class="{
                        'w-1/5': openFilterDrawer,
                        'w-0': !openFilterDrawer
                    }" class="h-auto p-3 border-t-2 border-b-2 border-l-2 divide-y-2 rounded-l-md"
                        x-show="openFilterDrawer" x-transition:enter="transition ease-in-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-x-0 translate-x-1/2"
                        x-transition:enter-end="opacity-100 transform scale-x-100 -translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 transform scale-x-100 -translate-x-0"
                        x-transition:leave-end="opacity-0 transform scale-x-0 translate-x-1/2">
                        <div class="text-2xl text-gray-400 font-bolder">
                            <h3>Filters</h3>
                        </div>
                        <div class="pt-4">
                            {{ $filters }}
                        </div>

                        <div class="pt-4 space-y-2">
                            {{ $clearFilter }}
                            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium font-bold rounded-md text-white bg-{{ $color }}-600 hover:bg-{{ $color }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $color }}-500" type="button" x-on:click="openFilterDrawer = false">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
