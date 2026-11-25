<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs\Campaign;

final class Patch extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: date-time
     */
    public string $end_date;
    public int $interest;
    public string $name;
    public \AplazameSDK\Collections\IntegerCollection $num_instalments;
    public bool $partial;
    /**
     * Format: date-time
     */
    public string $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'interest' => is_int($value) ? $this->interest = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'num_instalments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->num_instalments = new \AplazameSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'partial' => is_bool($value) ? $this->partial = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
