<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Checkout;

final class Offline extends \AplazameSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/checkout/offline',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            201,
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
        'responseType' => '\\AplazameSDK\\DTOs\\Checkout',
        'responseMediaType' => 'application/vnd.aplazame.v3+json',
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\OfflineCheckoutRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * POS: create a checkout
     */
    public function post(\AplazameSDK\DTOs\OfflineCheckoutRequest $payload): \AplazameSDK\DTOs\Checkout
    {
        /** @var \AplazameSDK\DTOs\Checkout $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
