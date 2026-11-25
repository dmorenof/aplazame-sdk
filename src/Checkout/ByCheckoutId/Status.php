<?php

declare(strict_types=1);

namespace AplazameSDK\Checkout\ByCheckoutId;

final class Status extends \AplazameSDK\AplazameAPISDK
{
    /** GET /checkout/{checkoutId}/status [operationId: getCheckoutStatus] */
    /**
     * POS: checkout status
     */
    public static function get(string $checkoutId): \AplazameSDK\DTOs\CheckoutStatus
    {
        return self::client()->resource(\AplazameSDK\Resources\Checkout\ByCheckoutId\Status::class)->get($checkoutId);
    }
}
