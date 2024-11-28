<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JadNetwork\LaravelSolana\Commands\LaravelSolanaCommand;

class LaravelSolanaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-solana')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_solana_table')
            ->hasCommand(LaravelSolanaCommand::class);
    }
}
