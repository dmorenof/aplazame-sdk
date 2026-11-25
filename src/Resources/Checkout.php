<?php

declare(strict_types=1);

namespace AplazameSDK\Resources;

final class Checkout extends \AplazameSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/checkout',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            200,
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
        'responseTypes' => [
            200 => [
                'type' => '\\AplazameSDK\\DTOs\\Checkout',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            201 => [
                'type' => '\\AplazameSDK\\DTOs\\Checkout',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
        ],
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\CheckoutRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a checkout (installments by default; product.type selects pay_later or pay_in_4)
     */
    public function post(\AplazameSDK\DTOs\CheckoutRequest $payload): \AplazameSDK\DTOs\Checkout
    {
        /** @var \AplazameSDK\DTOs\Checkout $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
