<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class VoidDTO extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount;
    /**
     * Format: date-time
     */
    public string $created;
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_string($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
