@php
    $classes = ['inline-flex', 'items-center', 'justify-center', 'space-x-2', 'rounded', 'font-medium', 'px-4', 'py-2', 'text-sm'];

    switch ($variant ?? null) {
        case 'primary':
            array_push($classes, 'bg-brand-primary', 'hover:bg-brand-primary-dark', 'text-white');
            break;

        case 'secondary':
            array_push($classes, 'bg-gray-100', 'hover:bg-gray-100', 'dark:hover:bg-gray-600', 'text-black', 'dark:text-white');
            break;

        case 'destructive':
            array_push($classes, 'bg-red-500', 'hover:bg-red-600', 'text-white');
            break;

        default:
            array_push($classes, 'hover:bg-gray-100', 'dark:hover:bg-gray-600');
            break;
    }

    if ($fullWidth ?? null) {
        array_push($classes, 'w-full');
    }
@endphp

@if ($href ?? null)
    <a class="{{ implode(' ', $classes) }}" href="{{ $href }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button class="{{ implode(' ', $classes) }}" type="{{ $type ?? 'button' }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
