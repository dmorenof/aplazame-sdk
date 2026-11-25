<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Currency extends \Dmorenof\SdkRuntime\DTO
{
    public string $code;
    public string $name;
    public string $numeric;
    public string $symbol;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'numeric' => is_string($value) ? $this->numeric = $value : parent::assignMember($name, $value),
            'symbol' => is_string($value) ? $this->symbol = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
