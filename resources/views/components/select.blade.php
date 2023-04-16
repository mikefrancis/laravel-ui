<fieldset>
    <label class="font-medium text-sm block mb-2 {{ $hiddenLabel ?? null ? 'hidden' : '' }}"
        for="{{ $name }}">{{ $label }}</label>
    <div class="border dark:border-gray-700 rounded relative">
        <select class="bg-transparent w-full appearance-none pl-3 pr-8 py-2 w-full" name="{{ $name }}"
            id="{{ $name }}">
            <option value="">{{ __('Please select') }}</option>
            @foreach ($options as $v => $text)
                <option {{ old($name, $value ?? null) === $v ? 'selected' : '' }} value="{{ $v }}">
                    {{ $text }}
                </option>
            @endforeach
        </select>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            class="w-5 h-5 absolute right-2 top-1/2 -translate-y-1/2 pointer-events-none">
            <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
        </svg>
    </div>
    @error($name)
        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
    @enderror
</fieldset>
