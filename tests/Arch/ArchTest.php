<?php

declare(strict_types=1);

use JadNetwork\LaravelSolana\Rpc\Responses\DTOs\Contracts\IResponseDTO;

arch('Classes declare strict types')
    ->expect('JadNetwork\LaravelSolana')
    ->toUseStrictTypes();

arch('Debugging calls are not present')
    ->expect('JadNetwork\LaravelSolana')
    ->not()
    ->toUse(['ray', 'dd', 'dump', 'die']);

arch('Response DTOs use IResponseDTO interface.')->expect('JadNetwork\LaravelSolana\Rpc\Responses\DTOs')->toImplement(IResponseDTO::class);
