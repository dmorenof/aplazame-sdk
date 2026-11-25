<?php

declare(strict_types=1);

namespace AplazameSDK\Checkout;

final class Offline extends \AplazameSDK\AplazameAPISDK
{
    /** POST /checkout/offline [operationId: createOfflineCheckout] */
    /**
     * POS: create a checkout
     */
    public static function post(\AplazameSDK\DTOs\OfflineCheckoutRequest $payload): \AplazameSDK\DTOs\Checkout
    {
        return self::client()->resource(\AplazameSDK\Resources\Checkout\Offline::class)->post($payload);
    }
}
