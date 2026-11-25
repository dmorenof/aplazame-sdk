<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Checkout extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Checkout ID set by Aplazame
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
