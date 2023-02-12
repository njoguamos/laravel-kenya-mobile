<?php

namespace NjoguAmos\KeMobile\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use NjoguAmos\KeMobile\KeMobileServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'NjoguAmos\\KenyaMobileRule\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            KeMobileServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-kenya-mobile_table.php.stub';
        $migration->up();
        */
    }
}
