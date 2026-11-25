<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\CampaignList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\Campaign> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\Campaign::class;
}
