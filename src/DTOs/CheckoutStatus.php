<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class CheckoutStatus extends \Dmorenof\SdkRuntime\DTO
{
    public \AplazameSDK\DTOs\Currency $currency;
    public string $id;
    public string $mid;
    public bool $sandbox;
    public \AplazameSDK\Enums\CheckoutStatus\StatusEnum $status;
    /**
     * confirmation_required, challenge_required, in_process, expired, expired_challenge, ko_generic, failed_challenge, confirmation_rejected_by_merchant, merchant_failed_to_confirm
     */
    public string $status_reason;
    public int $total_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => $value instanceof \stdClass ? $this->currency = new \AplazameSDK\DTOs\Currency($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'mid' => is_string($value) ? $this->mid = $value : parent::assignMember($name, $value),
            'sandbox' => is_bool($value) ? $this->sandbox = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \AplazameSDK\Enums\CheckoutStatus\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_reason' => is_string($value) ? $this->status_reason = $value : parent::assignMember($name, $value),
            'total_amount' => is_int($value) ? $this->total_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
