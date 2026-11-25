<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs\Order;

final class Edit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'order',
    ];

    public \AplazameSDK\DTOs\Order $order;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'order' => $value instanceof \stdClass ? $this->order = new \AplazameSDK\DTOs\Order($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
