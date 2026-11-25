<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Capture extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount;
    /**
     * Format: date-time
     */
    public string $created;
    public string $id;
    public int $refunded_amount;
    public \AplazameSDK\Collections\Capture\RefundsCollection $refunds;
    public int $remaining_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_string($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'refunded_amount' => is_int($value) ? $this->refunded_amount = $value : parent::assignMember($name, $value),
            'refunds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->refunds = new \AplazameSDK\Collections\Capture\RefundsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \AplazameSDK\DTOs\Refund::class)) : parent::assignMember($name, $value),
            'remaining_amount' => is_int($value) ? $this->remaining_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
