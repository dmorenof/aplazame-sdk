<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\Capture;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\Refund> */
final class RefundsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\Refund::class;
}
