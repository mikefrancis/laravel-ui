# laravel-ui

🚧 **This README is a work in progress** 🚧

An unofficial collection of basic UI components powered by Tailwind (and Alpine).

## Installation

From your Laravel project, add as an auto-discovered dependency:

```bash
composer require mikefrancis/laravel-ui
```

## Usage

### Input

A HTML `<input />` element wrapped in a `<fieldset />` with a `<label />`.

```blade
<x-ui::input type="email" name="email" label="Email" />
```

### Select

A HTML `<select />` element wrapped in a `<fieldset />` with a `<label />`.

```blade
<x-ui::select name="email" label="Email" :options="$options" :value="$value" />
```

### Dropdown

A dropdown menu component.

```blade
<x-ui::dropdown-menu>
  <x-ui::dropdown-menu-item @click="openSomething">
    Do a thing
  </x-ui::dropdown-menu-item>
  <x-ui::dropdown-menu-item href="/link/to/somewhere">
    Do another thing
  </x-ui::dropdown-menu-item>
</x-ui::dropdown-menu>
```

### Modal

A modal component.

```blade
<x-ui::modal>
  Content inside the modal.
</x-ui::modal>
```
