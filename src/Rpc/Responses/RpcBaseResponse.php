<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Responses;

abstract class RpcBaseResponse
{
    protected string $jsonrpc = "2.0";
    protected int $id = 1;
    protected array $result = [];

    /**
     * @ale
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->jsonrpc = $data['jsonrpc'];
        $this->result = $data['result'];
    }

    /**
     *  Convert the responses' result object representing the requests' purpose.
     *
     * Implementations of this method should transform the `result` array into a strongly typed
     * Data Transfer Object specific to the context of the requests' purpose.
     *
     * @example
     * For example:
     * - response for route `getBalance` should return a `GetBalanceDTO`.
     * - response for route `getAccountInfo` should return a `GetAccountInfoDTO`.
     * - response for route `getTransaction` should return a `GetTransactionDTO`.
     *
     * @internal
     * @return mixed The specific DTO representing the `result` for the RPC method.
     */
    abstract public function getDTO(): mixed;
}
