<?php

declare(strict_types=1);

namespace AplazameSDK\GetParams;

final class Orders extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'confirmed-isnull' => 'confirmedIsnull',
        'created-gte' => 'createdGte',
        'id-endswith' => 'idEndswith',
        'id-startswith' => 'idStartswith',
        'page' => 'page',
        'total_amount-gte' => 'total_amountGte',
        'total_amount-lte' => 'total_amountLte',
    ],
    'header' => [],
];

    protected const array PROPERTY_MAP = [
    'confirmed-isnull' => 'confirmedIsnull',
    'created-gte' => 'createdGte',
    'id-endswith' => 'idEndswith',
    'id-startswith' => 'idStartswith',
    'total_amount-gte' => 'total_amountGte',
    'total_amount-lte' => 'total_amountLte',
];
    protected const array WIRE_PROPERTY_MAP = [
    'confirmedIsnull' => 'confirmed-isnull',
    'createdGte' => 'created-gte',
    'idEndswith' => 'id-endswith',
    'idStartswith' => 'id-startswith',
    'total_amountGte' => 'total_amount-gte',
    'total_amountLte' => 'total_amount-lte',
];

    public ?\AplazameSDK\Enums\Orders\Get\Query\ConfirmedIsnullEnum $confirmedIsnull;
    public ?string $createdGte;
    public ?string $idEndswith;
    public ?string $idStartswith;
    public ?int $page;
    public ?int $total_amountGte;
    public ?int $total_amountLte;
}
