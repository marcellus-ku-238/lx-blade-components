<?php

declare(strict_types=1);

namespace SevenSpan\WhatsApp\Providers;

use SevenSpan\WhatsApp\WhatsApp;
use Illuminate\Support\ServiceProvider;
use SevenSpan\WhatsApp\Exceptions\InvalidConfig;

class LxBladeComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'components/lxb');
    }
}