<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs\OfflineCheckoutRequest;

final class MerchantDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: uri
     */
    public string $ipn_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ipn_url' => is_string($value) ? $this->ipn_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
