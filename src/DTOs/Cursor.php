<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Cursor extends \Dmorenof\SdkRuntime\DTO
{
    public int $after;
    public int $before;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after' => is_int($value) ? $this->after = $value : parent::assignMember($name, $value),
            'before' => is_int($value) ? $this->before = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
