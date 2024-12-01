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
        public int $slot,
        public readonly string $balance,
        protected int $id = 1,
        protected string $jsonrpc = '2.0',
        public ?string $apiVersion = null,
        public ?Carbon $timestamp = null,
    ) {
        $this->timestamp ??= Carbon::now();
    }

    public static function fromResponseObject(Collection $responseObject): IResponseDTO
    {
        return new self(slot: 49495, balance: '5kgkfkad', apiVersion: '5555');
    }
}
