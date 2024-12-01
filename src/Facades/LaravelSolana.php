<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JadNetwork\LaravelSolana\LaravelSolana
 */
class LaravelSolana extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JadNetwork\LaravelSolana\LaravelSolana::class;
    }
}
