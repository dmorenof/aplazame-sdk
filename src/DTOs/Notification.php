<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Notification extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: date-time
     */
    public ?string $cancelled;
    /**
     * Format: date-time
     */
    public ?string $confirmed;
    /**
     * Format: date-time
     */
    public string $created;
    public \AplazameSDK\DTOs\Currency $currency;
    public int $discount;
    public int $discount_rate;
    /**
     * Format: date-time
     */
    public ?string $expired;
    /**
     * Format: date-time
     */
    public ?string $expires_at;
    public string $id;
    public string $mid;
    public bool $rejected;
    public bool $sandbox;
    public \AplazameSDK\Enums\Notification\StatusEnum $status;
    public string $status_reason;
    public int $tax_rate;
    public int $total_amount;
    /**
     * Format: date-time
     */
    public ?string $verified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancelled' => $value === null || is_string($value) ? $this->cancelled = $value : parent::assignMember($name, $value),
            'confirmed' => $value === null || is_string($value) ? $this->confirmed = $value : parent::assignMember($name, $value),
            'created' => is_string($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => $value instanceof \stdClass ? $this->currency = new \AplazameSDK\DTOs\Currency($value) : parent::assignMember($name, $value),
            'discount' => is_int($value) ? $this->discount = $value : parent::assignMember($name, $value),
            'discount_rate' => is_int($value) ? $this->discount_rate = $value : parent::assignMember($name, $value),
            'expired' => $value === null || is_string($value) ? $this->expired = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'mid' => is_string($value) ? $this->mid = $value : parent::assignMember($name, $value),
            'rejected' => is_bool($value) ? $this->rejected = $value : parent::assignMember($name, $value),
            'sandbox' => is_bool($value) ? $this->sandbox = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \AplazameSDK\Enums\Notification\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_reason' => is_string($value) ? $this->status_reason = $value : parent::assignMember($name, $value),
            'tax_rate' => is_int($value) ? $this->tax_rate = $value : parent::assignMember($name, $value),
            'total_amount' => is_int($value) ? $this->total_amount = $value : parent::assignMember($name, $value),
            'verified' => $value === null || is_string($value) ? $this->verified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
