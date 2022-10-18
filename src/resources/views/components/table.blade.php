@props([
    'tHead' => [],
    'tBody' => [],
])

<div class="mt-6 mb-4 shadow ring-1 ring-black ring-opacity-5 md:mx-0 md:rounded-lg overflow-auto">
    <table class="min-w-full divide-y divide-gray-300">
        {{ $tHead }}
        {{ $tBody }}
    </table>
</div>
