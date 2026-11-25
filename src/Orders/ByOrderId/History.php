<?php

declare(strict_types=1);

namespace AplazameSDK\Orders\ByOrderId;

final class History extends \AplazameSDK\AplazameAPISDK
{
    /** POST /orders/{orderId}/history [operationId: sendOrderHistory] */
    /**
     * Send the customer's purchase history
     */
    public static function post(string $orderId, \AplazameSDK\Collections\HistoryBodyCollection $payload): void
    {
        self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\History::class)->post($orderId, $payload);
    }

}
