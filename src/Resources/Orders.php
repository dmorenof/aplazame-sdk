<?php

declare(strict_types=1);

namespace AplazameSDK\Resources;

final class Orders extends \AplazameSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/orders',
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
        'responseType' => '\\AplazameSDK\\DTOs\\OrderList',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
    ];

    /**
     * List orders (filters go in the query as `property-lookup=value`, e.g. `id-startswith=e791f`)
     */
    public function get(?\AplazameSDK\GetParams\Orders $params = null): \AplazameSDK\DTOs\OrderList
    {
        /** @var \AplazameSDK\DTOs\OrderList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ORDER_ID = [
        'method' => 'GET',
        'path' => '/orders/{orderId}',
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
        'responseType' => '\\AplazameSDK\\Responses\\Orders\\ByOrderId\\ByOrderIdMapResponse',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
    ];

    /**
     * Order details
     */
    public function getByOrderId(string $orderId): \AplazameSDK\Responses\Orders\ByOrderId\ByOrderIdMapResponse
    {
        /** @var \AplazameSDK\Responses\Orders\ByOrderId\ByOrderIdMapResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ORDER_ID), path: ['orderId' => $orderId]);
        return $result;
    }

    private const array PATCH_BY_ORDER_ID = [
        'method' => 'PATCH',
        'path' => '/orders/{orderId}',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            204,
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
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Order\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Partially edit an order
     */
    public function patchByOrderId(string $orderId, \AplazameSDK\DTOs\Order\Patch $payload): void
    {
        $this->executeBody(self::operation(self::PATCH_BY_ORDER_ID), $payload, path: ['orderId' => $orderId]);
        return;
    }

    private const array PUT_BY_ORDER_ID = [
        'method' => 'PUT',
        'path' => '/orders/{orderId}',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            204,
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
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Order\\Edit',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Edit an order
     */
    public function putByOrderId(string $orderId, \AplazameSDK\DTOs\Order\Edit $payload): void
    {
        $this->executeBody(self::operation(self::PUT_BY_ORDER_ID), $payload, path: ['orderId' => $orderId]);
        return;
    }

}
