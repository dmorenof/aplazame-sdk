<?php

declare(strict_types=1);

namespace AplazameSDK;

final class Checkout extends \AplazameSDK\AplazameAPISDK
{
    /** POST /checkout [operationId: createCheckout] */
    /**
     * Create a checkout (installments by default; product.type selects pay_later or pay_in_4)
     */
    public static function post(\AplazameSDK\DTOs\CheckoutRequest $payload): \AplazameSDK\DTOs\Checkout
    {
        return self::client()->resource(\AplazameSDK\Resources\Checkout::class)->post($payload);
    }
}
