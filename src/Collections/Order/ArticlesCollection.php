<?php

declare(strict_types=1);

namespace AplazameSDK\Collections\Order;

final class ArticlesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \AplazameSDK\DTOs\Article::class;
}
