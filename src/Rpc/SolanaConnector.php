<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc;

use Saloon\Http\Connector;

class SolanaConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return (string) config('solana.rpc_api_endpoint');
    }
}
