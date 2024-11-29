<?php

declare(strict_types=1);

use JadNetwork\LaravelSolana\Enums\RPCEndpoint as RPCEndpointAlias;

return [
    'rpc_api_endpoint' => env('SOLANA_RPC_ENDPOINT', RPCEndpointAlias::DEVNET),
];
