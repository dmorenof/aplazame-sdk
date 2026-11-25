<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Orders\ByOrderId\Captures\ByCaptureId;

final class Refunds extends \AplazameSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/orders/{orderId}/captures/{captureId}/refunds',
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
        'responseType' => '\\AplazameSDK\\DTOs\\Capture',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
    ];

    /**
     * Refunds of a capture
     */
    public function get(\AplazameSDK\PathParams\Orders\ByOrderId\Captures\ByCaptureId\Refunds $identifier): \AplazameSDK\DTOs\Capture
    {
        /** @var \AplazameSDK\DTOs\Capture $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/orders/{orderId}/captures/{captureId}/refunds',
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
        'responseType' => '\\AplazameSDK\\DTOs\\Capture',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Amount',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Refund a capture
     */
    public function post(\AplazameSDK\PathParams\Orders\ByOrderId\Captures\ByCaptureId\Refunds $identifier, \AplazameSDK\DTOs\Amount $payload): \AplazameSDK\DTOs\Capture
    {
        /** @var \AplazameSDK\DTOs\Capture $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: $identifier);
        return $result;
    }

}
