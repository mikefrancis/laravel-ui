@php
    $classes = ['inline-flex', 'items-center', 'justify-center', 'space-x-2', 'rounded', 'font-bold', 'px-3', 'py-2'];
    
    switch ($variant ?? null) {
        case 'primary':
            array_push($classes, 'bg-brand-primary', 'hover:bg-brand-primary-dark', 'text-white');
            break;
    
        default:
            array_push($classes, 'bg-gray-100', 'hover:bg-gray-200', 'text-black');
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
