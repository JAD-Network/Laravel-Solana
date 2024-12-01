<?php

declare(strict_types=1);

namespace JadNetwork\LaravelSolana\Rpc\Requests;

use Illuminate\Support\Collection;
use JadNetwork\LaravelSolana\Rpc\Responses\DTOs\Contracts\IResponseDTO;
use JadNetwork\LaravelSolana\Rpc\SolanaConnector;
use JsonException;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

abstract class BaseRpcRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    protected string $connector = SolanaConnector::class;

    public function __construct(
        protected string $methodName,
        protected array $params = [],
    ) {}

    /**
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): IResponseDTO
    {
        $jsonResponse = collect($response->json());

        return $this->createDto($jsonResponse);
    }

    abstract public function createDto(Collection $jsonObject): IResponseDTO;

    /**
     * RPC Endpoints are shared across all requests.
     * The request contains the name of the method, as opposed to route/method pairing.
     */
    public function resolveEndpoint(): string
    {
        return '/';
    }

    protected function defaultBody(): array
    {
        return [
            'jsonrpc' => '2.0',
            'id' => 1,
            'method' => $this->methodName,
            'params' => $this->params,
        ];
    }
}
