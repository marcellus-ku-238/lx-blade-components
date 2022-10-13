<?php

declare(strict_types=1);

namespace Parth1895\LxBladeComponents\Providers;

use Illuminate\Support\ServiceProvider;

class LxBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'components/lxb');
    }
}