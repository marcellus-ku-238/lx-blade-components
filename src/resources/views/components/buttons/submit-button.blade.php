<div>
    {{ $submitBtn }}
    {{ $cancelBtn }}
    <x-slot name="submit">
        <button type="button" {!! $attributes->merge([
            'class' =>
                'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
        ]) !!}>
            {{ $slot }}
        </button>

    </x-slot>

    <x-slot name="cancel">
        <button type="button" {!! $attributes->merge([
            'class' =>
                'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium font-bold rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
        ]) !!}>
            {{ $slot }}
        </button>
    </x-slot>
</div>
