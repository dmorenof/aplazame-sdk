<?php

declare(strict_types=1);

namespace AplazameSDK\Enums\Shipping;

enum MethodEnum: string
{
    case PickupPoint = 'pickup_point';
    case PickupStore = 'pickup_store';
    case Postal = 'postal';
}
