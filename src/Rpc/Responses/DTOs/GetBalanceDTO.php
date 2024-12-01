<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Responses\DTOs;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use JadNetwork\LaravelSolana\Rpc\Responses\DTOs\Contracts\IResponseDTO;

class GetBalanceDTO implements IResponseDTO
{
    /**
     * @deprecated Please do not use this constructor directly. Use the array for initialization instead.
     */
    public function __construct(
        protected int $id = 1,
        protected string $jsonrpc = "2.0",
        public int $slot,
        public ?string $apiVersion,
        public readonly string $balance,
        public ?Carbon $timestamp = null,
    ) {
        $this->timestamp ??= Carbon::now();
    }

    public static function fromResponseObject(Collection $responseObject): IResponseDTO
    {
        return new self(slot: 49495, apiVersion: '5555', balance: '5kgkfkad');
    }
}
