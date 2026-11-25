<?php

declare(strict_types=1);

namespace AplazameSDK\Orders\ByOrderId;

final class Cancel extends \AplazameSDK\AplazameAPISDK
{
    /** POST /orders/{orderId}/cancel [operationId: cancelOrder] */
    /**
     * Cancel a confirmed order
     */
    public static function post(string $orderId): void
    {
        self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Cancel::class)->post($orderId);
    }

}
