<?php

declare(strict_types=1);

use JadNetwork\LaravelSolana\Enums\RPCEndpoint as RPCEndpointAlias;

return [
    'RPC_ENDPOINT' => env('SOLANA_RPC_ENDPOINT', RPCEndpointAlias::DEVNET),
];
