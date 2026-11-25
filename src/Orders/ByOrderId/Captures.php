<?php

declare(strict_types=1);

namespace AplazameSDK\Orders\ByOrderId;

final class Captures extends \AplazameSDK\AplazameAPISDK
{
    /** GET /orders/{orderId}/captures [operationId: listCaptures] */
    /**
     * Captures of an order
     */
    public static function get(string $orderId): \AplazameSDK\DTOs\CaptureList
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Captures::class)->get($orderId);
    }

    /** POST /orders/{orderId}/captures [operationId: createCapture] */
    /**
     * Request a capture (only for the pay-in-15-days product, on a confirmed order)
     */
    public static function post(string $orderId, \AplazameSDK\DTOs\Amount $payload): \AplazameSDK\DTOs\CaptureCreated
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Captures::class)->post($orderId, $payload);
    }

}
