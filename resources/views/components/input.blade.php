<fieldset>
    <label class="font-medium text-sm block mb-2 {{ $hiddenLabel ?? null ? 'hidden' : '' }}"
        for="{{ $name }}">{{ $label }}</label>
    <input class="border dark:border-gray-800 w-full rounded px-3 py-2 bg-transparent" type="{{ $type ?? 'text' }}"
        name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value ?? null) }}"
        {!! $hiddenLabel ?? null ? 'placeholder="' . $label . '"' : '' !!} {{ $attributes }} />
    @error($name)
        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
    @enderror
</fieldset>
