<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Responses\DTOs;

use Illuminate\Support\Carbon;

class GetTokenAccountBalanceDTO
{
    public Carbon $timestamp;

    /**
     * @deprecated Please do not use this constructor directly. Use the array for initialization instead.
     */
    public function __construct(
        public int $slot,
        public ?string $apiVersion,
        public string $amount,
        public float $uiAmount,
        public string $uiAmountString,
    ) {
        $this->timestamp = Carbon::now();
    }

    public static function fromArray(array $data): GetTokenAccountBalanceDTO
    {
        return new GetTokenAccountBalanceDTO($data['slot'], $data['apiVersion'], $data['amount'], $data['uiAmount'], $data['uiAmountString']);
    }
}
