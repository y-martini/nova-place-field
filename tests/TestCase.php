<?php

namespace YuriyMartini\NovaPlaceField\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use YuriyMartini\NovaPlaceField\ServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app) // @phpstan-ignore-line
    {
        return [
            ServiceProvider::class,
        ];
    }
}
