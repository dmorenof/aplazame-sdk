<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class VoidList extends \Dmorenof\SdkRuntime\DTO
{
    public int $remaining_amount;
    public \AplazameSDK\Collections\VoidList\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'remaining_amount' => is_int($value) ? $this->remaining_amount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \AplazameSDK\Collections\VoidList\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \AplazameSDK\DTOs\VoidDTO::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
