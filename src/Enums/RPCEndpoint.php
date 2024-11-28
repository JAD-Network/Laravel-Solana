<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Enums;

enum RPCEndpoint: string
{
    case DEVNET = 'https://api.devnet.solana.com';
    case TESTNET = 'https://api.testnet.solana.com';
    case MAINNET = 'https://api.mainnet-beta.solana.com';

}
