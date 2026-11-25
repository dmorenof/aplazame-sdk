<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Orders\ByOrderId;

final class History extends \AplazameSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/orders/{orderId}/history',
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
            'type' => '\\AplazameSDK\\Collections\\HistoryBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send the customer's purchase history
     */
    public function post(string $orderId, \AplazameSDK\Collections\HistoryBodyCollection $payload): void
    {
        $this->executeBody(self::operation(self::POST), $payload, path: ['orderId' => $orderId]);
        return;
    }

}
