<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Refund extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: date
     */
    public string $accrual_date;
    public int $amount;
    public bool $completed;
    public bool $completed_but_defaults;
    /**
     * Format: date-time
     */
    public string $created;
    public int $credit_to_customer;
    public string $id;
    public int $pending_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accrual_date' => is_string($value) ? $this->accrual_date = $value : parent::assignMember($name, $value),
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'completed' => is_bool($value) ? $this->completed = $value : parent::assignMember($name, $value),
            'completed_but_defaults' => is_bool($value) ? $this->completed_but_defaults = $value : parent::assignMember($name, $value),
            'created' => is_string($value) ? $this->created = $value : parent::assignMember($name, $value),
            'credit_to_customer' => is_int($value) ? $this->credit_to_customer = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'pending_amount' => is_int($value) ? $this->pending_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
