<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class CaptureList extends \Dmorenof\SdkRuntime\DTO
{
    public int $remaining_capture_amount;
    public \AplazameSDK\Collections\CaptureList\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'remaining_capture_amount' => is_int($value) ? $this->remaining_capture_amount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \AplazameSDK\Collections\CaptureList\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \AplazameSDK\DTOs\Capture::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
