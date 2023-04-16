<ul x-show="open"
    class="absolute bg-white dark:bg-gray-700 border dark:border-gray-800 rounded right-0 {{ isset($direction) && $direction === 'up' ? 'bottom-full' : '' }} text-sm py-2 z-10"
    @click.outside="open = false">
    {{ $slot }}
</ul>
