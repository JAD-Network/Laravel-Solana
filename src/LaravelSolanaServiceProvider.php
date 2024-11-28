<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana;

use JadNetwork\LaravelSolana\Commands\LaravelSolanaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
