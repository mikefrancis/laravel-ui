<template x-teleport="body">
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="open">
        <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white dark:bg-gray-700 text-black dark:text-white text-left shadow-xl transition-all flex-1 max-w-xl p-10"
                    @keydown.escape.window="open = false" @click.outside="open = false">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</template>
