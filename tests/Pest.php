<?php

declare(strict_types=1);

use JadNetwork\LaravelSolana\Tests\TestCase;

pest()->extend(TestCase::class)
    ->group('architecture')
    ->in('arch');

pest()->extend(TestCase::class)
    ->group('unit')
    ->in('unit');

pest()->extend(TestCase::class)
    ->group('feature')
    ->in('feature');
