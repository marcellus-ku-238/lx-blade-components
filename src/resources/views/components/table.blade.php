@props([
    'isSearch' => false,
    'hasFilters' => false,
])

<div class="flex justify-between">
    @if ($isSearch)
        <div class="w-1/3">
            {{ $search }}
        </div>
    @endif

    @if ($hasFilters)
        <div>
            {{ $filters }}
        </div>
    @endif
</div>

<div class="mt-6 mb-4 overflow-auto shadow ring-1 ring-black ring-opacity-5 md:mx-0 md:rounded-lg">
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
