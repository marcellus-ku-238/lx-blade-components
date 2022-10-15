@props(['type' => 'success', 'autoHide' => false, 'message' => 'Operation completed successfully.'])

<div x-data="{
    open: true,
    autoHide: '{{ $autoHide }}'
    init() {
        if (this.autoHide == true) {
            setTimeout(() => this.open = false, 1200)
        }
    }
}">
    <div @class([
        'text-green-400 bg-green-100' => $type == 'success',
        'text-red-400 bg-red-100' => $type == 'failed',
        'text-yellow-400 bg-yellow-100' => $type == 'warning',
        'text-blue-400 bg-blue-100' => $type == 'info',
        'text-sm p-3 font-bold rounded-md flex place-content-between',
    ]) x-show="open">
        {{ $slot->isEmpty() ? $message : $slot }}
        <button type="button" x-on:click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6" @class([
                    'text-green-400' => $type == 'success',
                    'text-red-400' => $type == 'failed',
                    'text-yellow-400' => $type == 'warning',
                    'text-blue-400' => $type == 'info',
                    'w-5 h-5',
                ])>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
