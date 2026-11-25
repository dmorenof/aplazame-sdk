<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\CaptureList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\Capture> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\Capture::class;
}
