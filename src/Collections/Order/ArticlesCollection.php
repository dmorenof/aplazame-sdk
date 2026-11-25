<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\Order;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\AplazameSDK\DTOs\Article> */
final class ArticlesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\Article::class;
}
