<?php

declare(strict_types=1);

namespace AplazameSDK\Orders\ByOrderId;

final class VoidResource extends \AplazameSDK\AplazameAPISDK
{
    /** GET /orders/{orderId}/void [operationId: listVoids] */
    /**
     * Voids of an order
     */
    public static function get(string $orderId): \AplazameSDK\DTOs\VoidList
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\VoidResource::class)->get($orderId);
    }

    /** POST /orders/{orderId}/void [operationId: createVoid] */
    /**
     * Void part of an order
     */
    public static function post(string $orderId, \AplazameSDK\DTOs\Amount $payload): \AplazameSDK\DTOs\VoidList
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\VoidResource::class)->post($orderId, $payload);
    }

}
