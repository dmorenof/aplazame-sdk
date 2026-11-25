<?php

declare(strict_types=1);

namespace AplazameSDK\Enums\CheckoutStatus;

enum StatusEnum: string
{
    case Ko = 'ko';
    case Ok = 'ok';
    case Pending = 'pending';
}
