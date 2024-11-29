<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

abstract class RpcBaseRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;

    public function __construct(
        protected string $methodName,
        protected array $params = [],
    ) {}

    /**
     * Solano RPC Endpoints are static for all requests.
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/';
    }

    protected function defaultBody(): array
    {
        return [
            'jsonrpc' => '2.0',
            'id'      => 1,
            'method'  => $this->methodName,
            'params'  => $this->params,
        ];
    }
}
