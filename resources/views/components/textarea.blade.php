<fieldset>
    <label class="font-medium text-sm block mb-2 {{ $hiddenLabel ?? null ? 'hidden' : '' }}"
        for="{{ $name }}">{{ $label }}</label>
    <textarea class="border dark:border-gray-800 w-full rounded px-3 py-2 bg-transparent" name="{{ $name }}"
        id="{{ $name }}" {!! $hiddenLabel ?? null ? 'placeholder="' . $label . '"' : '' !!} {{ $attributes }}>{{ old($name, $value ?? null) }}</textarea>
    @error($name)
        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
    @enderror
</fieldset>
