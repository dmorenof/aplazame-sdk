<?php

declare(strict_types=1);

namespace AplazameSDK\Orders\ByOrderId;

final class Refund extends \AplazameSDK\AplazameAPISDK
{
    /** GET /orders/{orderId}/refund [operationId: getRefundableAmount] */
    /**
     * Remaining amount that can be refunded
     */
    public static function get(string $orderId): \AplazameSDK\DTOs\RemainingAmount
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Refund::class)->get($orderId);
    }

    /** POST /orders/{orderId}/refund [operationId: createRefund] */
    /**
     * Refund online financing
     */
    public static function post(string $orderId, \AplazameSDK\DTOs\Amount $payload): \AplazameSDK\DTOs\RemainingAmount
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Refund::class)->post($orderId, $payload);
    }

}
