<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JadNetwork\LaravelSolana\LaravelSolanaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            static fn(string $modelName) => 'JadNetwork\\LaravelSolana\\Database\\Factories\\' . class_basename($modelName) . 'Factory',
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSolanaServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-solana_table.php.stub';
        $migration->up();
        */
    }
}
