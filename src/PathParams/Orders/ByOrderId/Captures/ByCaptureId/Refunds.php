<?php

declare(strict_types=1);

namespace AplazameSDK\PathParams\Orders\ByOrderId\Captures\ByCaptureId;

final class Refunds extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'captureId',
    'orderId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'captureId' => 'captureId',
        'orderId' => 'orderId',
    ],
    'query' => [],
    'header' => [],
];

    public string $captureId;
    public string $orderId;
}
