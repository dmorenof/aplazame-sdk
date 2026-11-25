<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class ConfirmationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    public string $order_id;
    public \AplazameSDK\Enums\ConfirmationResponse\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'order_id' => is_string($value) ? $this->order_id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \AplazameSDK\Enums\ConfirmationResponse\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
