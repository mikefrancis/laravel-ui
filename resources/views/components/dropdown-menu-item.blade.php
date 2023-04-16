@php
    $classes = 'flex items-center space-x-2 px-4 py-2 hover:bg-gray-50 hover:dark:bg-gray-800 w-full text-left';
@endphp

@if ($href ?? null)
    <a class="{{ $classes }}" href="{{ $href }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button class="{{ $classes }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
