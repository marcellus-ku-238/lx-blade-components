@props(['type' => 'success', 'autoHide' => false, 'message' => 'Operation completed successfully.'])

<!--
    NOTE: This component uses alpineJs to improve user interaction.
          Please add alpineJS if you are using livewire 2.
          If you are using livewire 3, you'll just install Livewire and
          everything you need is automatically injected - including Alpine!
-->

<div x-data="{
    open: true,
    autoHide: '{{ $autoHide }}',
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
        'max-w-screen-xl mx-auto p-3 sm:px-6 lg:px-8 rounded-md flex place-content-between',
    ]) x-show="open">
        <p class="font-black text-sm truncate">
            {{ $slot->isEmpty() ? $message : $slot }}
        </p>

        <button type="button" x-on:click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6" @class([
                    'text-green-400' => $type == 'success',
                    'text-red-400' => $type == 'failed',
                    'text-yellow-400' => $type == 'warning',
                    'text-blue-400' => $type == 'info',
                    'w-5 h-5 font-black text-sm',
                ])>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
