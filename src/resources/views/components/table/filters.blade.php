@props([
    'color' => 'indigo',
    'filters' => null,
])
<div x-data="{
    open: false
}">
    <div class="grid justify-items-end">
        <button class=" bg-{{ $color }}-500 border border-transparent rounded-md" x-on:click="open = !open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 m-2 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
            </svg>
        </button>
    </div>


    <div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" x-show="open">
        <!--
    Background backdrop, show/hide based on slide-over state.

    Entering: "ease-in-out duration-500"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in-out duration-500"
      From: "opacity-100"
      To: "opacity-0"
  -->
        <div class="fixed inset-0 transition-opacity duration-500 ease-in-out bg-gray-500 bg-opacity-75"
            x-transition:enter.duration.1200ms x-transition:leave.duration.1200ms></div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="fixed inset-y-0 right-0 flex max-w-full pl-10 pointer-events-none">
                    <div class="relative w-screen max-w-md pointer-events-auto">
                        <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4">
                            <button type="button" x-on:click="open = !open"
                                class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                <span class="sr-only">Close panel</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
                            <div class="px-4 sm:px-6">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Filters</h2>
                            </div>
                            <div class="relative flex-1 px-4 mt-6 sm:px-6">
                                <!-- Replace with your content -->
                                <div class="absolute inset-0 px-4 sm:px-6">
                                    <div class="grid grid-cols-1 gap-4 border-dashed divide-y">
                                        @foreach ($filters as $filterLabel => $filterValues)
                                            <div class="w-full py-4">
                                                <x-lx.form-inputs.label for="{{ $filterLabel }}" :value="str()->ucfirst($filterLabel)" />
                                                <div class="flex mt-4 space-x-4">
                                                    @foreach ($filterValues as $filterValue)
                                                        <button
                                                            class="flex justify-between p-2 space-x-2 text-gray-200 bg-indigo-600 rounded shadow-inner w-min">
                                                            <span class="self-center"> {{ $filterValue }}</span>
                                                            <strong
                                                                class="text-xl cursor-pointer align-center alert-del">&times;</strong>
                                                        </button>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-cols-1 gap-4 border-t-2 divide-y">
                                        <div class="w-full mt-5">
                                            <button
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium font-bold rounded-md text-white bg-{{ $color }}-600 hover:bg-{{ $color }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $color }}-500">Apply filters</button>
                                            <button
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium font-bold rounded-md text-white bg-{{ $color }}-600 hover:bg-{{ $color }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $color }}-500">Clear
                                                Filters</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- /End replace -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
