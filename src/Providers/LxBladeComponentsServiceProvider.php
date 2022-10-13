<?php

declare(strict_types=1);

namespace Parth1895\LxBladeComponents\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;


class LxBladeComponentsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lx');

        $this->configureComponents();
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lx');

        $this->configureComponents();
        $this->configurePublishing();

    }
    protected function configurePublishing()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/lx'),
        ], 'lx-views');
    }

    /**
     * Configure the LX Blade components.
     *
     * @return void
     */
    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('input');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component)
    {
        Blade::component('components.'.$component, $component);
    }
}