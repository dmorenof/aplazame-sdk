<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class CheckoutRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'customer',
    'merchant',
    'order',
    'shipping',
];

    public \AplazameSDK\DTOs\Billing $billing;
    public \AplazameSDK\DTOs\Customer $customer;
    public \AplazameSDK\DTOs\Merchant $merchant;
    public \AplazameSDK\DTOs\Order $order;
    public \AplazameSDK\DTOs\Product $product;
    public \AplazameSDK\DTOs\Shipping $shipping;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing' => $value instanceof \stdClass ? $this->billing = new \AplazameSDK\DTOs\Billing($value) : parent::assignMember($name, $value),
            'customer' => $value instanceof \stdClass ? $this->customer = new \AplazameSDK\DTOs\Customer($value) : parent::assignMember($name, $value),
            'merchant' => $value instanceof \stdClass ? $this->merchant = new \AplazameSDK\DTOs\Merchant($value) : parent::assignMember($name, $value),
            'order' => $value instanceof \stdClass ? $this->order = new \AplazameSDK\DTOs\Order($value) : parent::assignMember($name, $value),
            'product' => $value instanceof \stdClass ? $this->product = new \AplazameSDK\DTOs\Product($value) : parent::assignMember($name, $value),
            'shipping' => $value instanceof \stdClass ? $this->shipping = new \AplazameSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
