<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests;

use Illuminate\Support\Collection;
use JadNetwork\LaravelSolana\Rpc\Responses\DTOs\Contracts\IResponseDTO;

class GetBalanceRpcRequest extends BaseRpcRequest
{
    public function __construct(string $accountPublicKey)
    {
        parent::__construct(
            methodName: 'getBalance',
            params: [$accountPublicKey],
        );
    }

    public function createDto(Collection $jsonObject): IResponseDTO
    {
        // TODO: Implement createDto() method.
    }
}