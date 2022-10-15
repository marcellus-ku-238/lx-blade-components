@props(['id' => null, 'maxWidth' => null, 'show' => false])

<x-lx.modals.modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }} :show="$show">
    <div class="p-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">{{ $title }}</h3>
        <div class="mt-2">
            <p class="text-sm text-gray-500">{{ $content }}</p>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 text-right">
        {{ $footer }}
    </div>
</x-lx.modals.modal>
