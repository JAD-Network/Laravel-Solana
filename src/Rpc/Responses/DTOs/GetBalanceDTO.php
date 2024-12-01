<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Responses\DTOs;

use Illuminate\Support\Carbon;

class GetBalanceDTO
{
    public Carbon $timestamp;

    /**
     * @deprecated Please do not use this constructor directly. Use the array for initialization instead.
     */
    public function __construct(
        public int $slot,
        public ?string $apiVersion,
        public readonly string $balance,
    ) {
        $this->timestamp = Carbon::now();
    }

    public static function fromArray(array $data): GetBalanceDTO
    {
        return new GetBalanceDTO($data['slot'], $data['apiVersion'], $data['value']);
    }
}
