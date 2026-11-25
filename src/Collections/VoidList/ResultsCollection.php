<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\VoidList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\VoidDTO> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\VoidDTO::class;
}
