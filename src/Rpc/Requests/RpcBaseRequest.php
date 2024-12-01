<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests;

use JadNetwork\LaravelSolana\Rpc\SolanaConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

abstract class RpcBaseRequest extends Request implements HasBody
{
    use HasJsonBody;
    protected Method $method = Method::POST;
    protected string $connector = SolanaConnector::class;

    public function __construct(
        protected string $methodName,
        protected array $params = [],
    ) {}

    abstract public function createDtoFromResponse(Response $response): mixed;

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
