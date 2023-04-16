<?php

namespace MikeFrancis\LaravelUi;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
  public function register()
  {
    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');

    $this->publishes([
      __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-ui'),
    ]);
  }
}
