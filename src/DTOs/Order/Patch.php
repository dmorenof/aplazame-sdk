<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs\Order;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Partial order: any of the fields of an order
     */
    public \AplazameSDK\DTOs\Order\Patch\OrderMap $order;
}
