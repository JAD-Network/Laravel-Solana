<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests;

class GetBalanceRequest extends RpcBaseRequest
{
    public function __construct(string $accountPublicKey)
    {
        parent::__construct(
            methodName: 'getBalance',
            params: [$accountPublicKey],
        );
    }
}
