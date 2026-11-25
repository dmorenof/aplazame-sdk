<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Product extends \Dmorenof\SdkRuntime\DTO
{
    public \AplazameSDK\Enums\Product\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \AplazameSDK\Enums\Product\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
