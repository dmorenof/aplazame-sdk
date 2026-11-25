<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class HistoryItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'currency',
    'id',
    'order_date',
    'status',
    'type',
];

    public int $amount;
    public \AplazameSDK\DTOs\Billing $billing;
    public string $currency;
    public ?int $due;
    public string $id;
    /**
     * Date of the order
     */
    public string $order_date;
    public \AplazameSDK\DTOs\Shipping $shipping;
    public \AplazameSDK\Enums\HistoryItem\StatusEnum $status;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'billing' => $value instanceof \stdClass ? $this->billing = new \AplazameSDK\DTOs\Billing($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'due' => $value === null || is_int($value) ? $this->due = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'order_date' => is_string($value) ? $this->order_date = $value : parent::assignMember($name, $value),
            'shipping' => $value instanceof \stdClass ? $this->shipping = new \AplazameSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \AplazameSDK\Enums\HistoryItem\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
