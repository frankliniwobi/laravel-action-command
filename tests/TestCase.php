<?php

declare(strict_types=1);

namespace Tests;

use FranklinIwobi\LaravelAction\LaravelActionServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    /**
     * Get the application package providers.
     */
    protected function getPackageProviders($app): array
    {
        app()->detectEnvironment(fn (): string => 'production');

        return [
            LaravelActionServiceProvider::class,
        ];
    }
}
