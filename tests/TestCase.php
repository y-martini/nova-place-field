<?php

namespace YuriyMartini\NovaPackageName\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use YuriyMartini\NovaPackageName\ServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
