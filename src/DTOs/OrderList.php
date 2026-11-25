<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class OrderList extends \Dmorenof\SdkRuntime\DTO
{
    public \AplazameSDK\DTOs\Cursor $cursor;
    public \AplazameSDK\DTOs\Paging $paging;
    public \AplazameSDK\Collections\OrderList\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cursor' => $value instanceof \stdClass ? $this->cursor = new \AplazameSDK\DTOs\Cursor($value) : parent::assignMember($name, $value),
            'paging' => $value instanceof \stdClass ? $this->paging = new \AplazameSDK\DTOs\Paging($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
