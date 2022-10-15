<?php

declare(strict_types=1);

namespace MarcellusKu238\LxBladeComponents\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use MarcellusKu238\LxBladeComponents\Console\Commands\InstallCommand;

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

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    
    }

    protected function configurePublishing()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/components/lx'),
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
            $this->registerComponent('label');
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