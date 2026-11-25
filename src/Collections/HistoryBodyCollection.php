<?php

declare(strict_types=1);

namespace AplazameSDK\Collections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\HistoryItem> */
final class HistoryBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\HistoryItem::class;
}
