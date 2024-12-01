<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Responses\DTOs\Contracts;

use Illuminate\Support\Collection;

interface IResponseDTO
{
    public static function fromResponseObject(Collection $responseObject): IResponseDTO;
}
