@if ($errors->any())
    <div {!! $attributes->merge([
        'class' => 'max-w-screen-xl mx-auto p-3 sm:px-6 lg:px-8 rounded-md bg-red-100',
    ]) !!}>
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 ml-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
