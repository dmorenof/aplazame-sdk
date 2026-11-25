<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Orders\ByOrderId;

final class Cancel extends \AplazameSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/orders/{orderId}/cancel',
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
    ];

    /**
     * Cancel a confirmed order
     */
    public function post(string $orderId): void
    {
        $this->executeArguments(self::operation(self::POST), path: ['orderId' => $orderId]);
        return;
    }
}
