<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class CampaignList extends \Dmorenof\SdkRuntime\DTO
{
    public \AplazameSDK\DTOs\Cursor $cursor;
    public \AplazameSDK\DTOs\Paging $paging;
    public \AplazameSDK\Collections\CampaignList\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cursor' => $value instanceof \stdClass ? $this->cursor = new \AplazameSDK\DTOs\Cursor($value) : parent::assignMember($name, $value),
            'paging' => $value instanceof \stdClass ? $this->paging = new \AplazameSDK\DTOs\Paging($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \AplazameSDK\Collections\CampaignList\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \AplazameSDK\DTOs\Campaign::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
