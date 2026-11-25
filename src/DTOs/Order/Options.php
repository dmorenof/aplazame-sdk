<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs\Order;

final class Options extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: date
     */
    public string $event_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_date' => is_string($value) ? $this->event_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
