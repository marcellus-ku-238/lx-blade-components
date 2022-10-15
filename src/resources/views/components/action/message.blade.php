@props(['type' => 'success', 'message' => 'Operation completed successfully.'])

<div @class([
    'text-green-400 bg-green-100' => $type == 'success',
    'text-red-400 bg-red-100' => $type == 'failed',
    'text-yellow-400 bg-yellow-100' => $type == 'warning',
    'text-blue-400 bg-blue-100' => $type == 'info',
    'text-sm p-3 font-bold rounded-md',
])>
    {{ $slot->isEmpty() ? $message : $slot }}
</div>
