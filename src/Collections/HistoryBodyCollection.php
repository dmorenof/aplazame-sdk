<?php

declare(strict_types=1);

namespace AplazameSDK\Collections;

final class HistoryBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\HistoryItem::class;
}
