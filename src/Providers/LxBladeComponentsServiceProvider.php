<?php

declare(strict_types=1);

namespace Parth1895\LxBladeComponents\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class LxBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::componentNamespace('Parth1895\\LxBladeComponents\\Resources\\Views\\Components\\Input', 'inputTest');
    }
}