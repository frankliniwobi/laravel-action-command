<?php

declare(strict_types=1);

namespace FranklinIwobi\LaravelAction;

use FranklinIwobi\LaravelAction\Commands\LaravelActionCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * @internal
 */
final class LaravelActionServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaravelActionCommand::class,
            ]);

            $this->publishes([
                __DIR__.'/../stubs' => $this->app->basePath('stubs'),
            ], 'laravel-action-stubs');
        }
    }
}
