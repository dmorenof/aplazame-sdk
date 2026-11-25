<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\OrderList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\OrderList\ResultsMap> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\OrderList\ResultsMap::class;
}
