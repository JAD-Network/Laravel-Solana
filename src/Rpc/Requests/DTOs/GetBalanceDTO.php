<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests\DTOs;

use Illuminate\Support\Carbon;

class GetBalanceDTO
{
    public private(set) Carbon $timestamp;

    /**
     * @deprecated Please do not use this constructor directly. Use the array for initialization instead.
     */
    public function __construct(
        public private(set) int $slot,
        public private(set) ?string $apiVersion,
        public private(set) readonly string $balance,
    ) {
        $this->timestamp = Carbon::now();
    }

    public static function fromArray(array $data): GetBalanceDTO
    {
        return new GetBalanceDTO($data['slot'], $data['apiVersion'], $data['value']);
    }
}
