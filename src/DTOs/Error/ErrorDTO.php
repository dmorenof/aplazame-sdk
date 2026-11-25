<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs\Error;

final class ErrorDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \AplazameSDK\DTOs\Error\Error\FieldsMap $fields;
    public string $message;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
