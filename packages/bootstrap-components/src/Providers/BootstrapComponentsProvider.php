<?php

namespace TZelleke\BootstrapComponents\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BootstrapComponentsProvider extends ServiceProvider
{
    const PACKAGE_PREFIX = 'bs';

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', self::PACKAGE_PREFIX);
        Blade::componentNamespace('TZelleke\\BootstrapComponents\\View\\Components', self::PACKAGE_PREFIX);
        Blade::anonymousComponentPath(__DIR__ . '/../../resources/views/components', self::PACKAGE_PREFIX);
    }
}
