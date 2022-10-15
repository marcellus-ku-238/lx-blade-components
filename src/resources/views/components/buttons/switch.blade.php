<div x-data='{
    open: false
}'>
    <button type="button" {!! $attributes->merge([
        'class' => 'relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors
    ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-indigo-600',
    ]) !!}
        :class="{ 'bg-slate-400 transition shadow-md translate-x-7': open == true }">
        {{ $slot }}
    </button>
</div>
