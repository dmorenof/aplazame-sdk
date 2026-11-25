<?php

declare(strict_types=1);

namespace AplazameSDK\Enums\HistoryItem;

enum StatusEnum: string
{
    case Cancelled = 'cancelled';
    case Complete = 'complete';
    case Pending = 'pending';
    case Processing = 'processing';
}
