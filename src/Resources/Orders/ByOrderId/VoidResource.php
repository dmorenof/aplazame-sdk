<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Orders\ByOrderId;

final class VoidResource extends \AplazameSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/orders/{orderId}/void',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\AplazameSDK\\DTOs\\VoidList',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
    ];

    /**
     * Voids of an order
     */
    public function get(string $orderId): \AplazameSDK\DTOs\VoidList
    {
        /** @var \AplazameSDK\DTOs\VoidList $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['orderId' => $orderId]);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/orders/{orderId}/void',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\AplazameSDK\\DTOs\\VoidList',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Amount',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Void part of an order
     */
    public function post(string $orderId, \AplazameSDK\DTOs\Amount $payload): \AplazameSDK\DTOs\VoidList
    {
        /** @var \AplazameSDK\DTOs\VoidList $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['orderId' => $orderId]);
        return $result;
    }
}
