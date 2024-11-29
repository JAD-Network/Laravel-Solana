<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests\DTOs;

use Illuminate\Support\Carbon;

class GetTokenAccountBalanceDTO
{
    public private(set) Carbon $timestamp;

    /**
     * @deprecated Please do not use this constructor directly. Use the array for initialization instead.
     */
    public function __construct(
        public private(set) int $slot,
        public private(set) ?string $apiVersion,
        public private(set) string $amount,
        public private(set) float $uiAmount,
        public private(set) string $uiAmountString,
    ) {
        $this->timestamp = Carbon::now();
    }

    public static function fromArray(array $data): GetTokenAccountBalanceDTO
    {
        return new GetTokenAccountBalanceDTO($data['slot'], $data['apiVersion'], $data['amount'], $data['uiAmount'], $data['uiAmountString']);
    }
}
