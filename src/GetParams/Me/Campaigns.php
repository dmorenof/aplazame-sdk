<?php

declare(strict_types=1);

namespace AplazameSDK\GetParams\Me;

final class Campaigns extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page' => 'page',
        ],
        'header' => [],
    ];

    public ?int $page;
}
