<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class RemainingAmount extends \Dmorenof\SdkRuntime\DTO
{
    public int $remaining_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'remaining_amount' => is_int($value) ? $this->remaining_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
