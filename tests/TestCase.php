<?php

namespace YuriyMartini\NovaExampleField\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use YuriyMartini\NovaExampleField\ServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app) // @phpstan-ignore-line
    {
        return [
            ServiceProvider::class,
        ];
    }
}
