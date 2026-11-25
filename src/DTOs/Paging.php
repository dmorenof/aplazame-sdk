<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Paging extends \Dmorenof\SdkRuntime\DTO
{
    public int $count;
    public ?string $next;
    public ?string $previous;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'next' => $value === null || is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'previous' => $value === null || is_string($value) ? $this->previous = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
