<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Commands;

use Illuminate\Console\Command;

class LaravelSolanaCommand extends Command
{
    public $signature = 'laravel-solana';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
