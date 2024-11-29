<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Responses;

use JadNetwork\LaravelSolana\Rpc\Requests\DTOs\GetBalanceDTO;

class GetBalanceResponse extends RpcBaseResponse
{
    public function getDTO(): GetBalanceDTO
    {
        return GetBalanceDTO::fromArray($this->result);
    }
}
