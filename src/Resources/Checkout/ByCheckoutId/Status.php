<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Checkout\ByCheckoutId;

final class Status extends \AplazameSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/checkout/{checkoutId}/status',
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
        'responseType' => '\\AplazameSDK\\DTOs\\CheckoutStatus',
        'responseMediaType' => 'application/vnd.aplazame.v3+json',
    ];

    /**
     * POS: checkout status
     */
    public function get(string $checkoutId): \AplazameSDK\DTOs\CheckoutStatus
    {
        /** @var \AplazameSDK\DTOs\CheckoutStatus $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['checkoutId' => $checkoutId]);
        return $result;
    }
}
