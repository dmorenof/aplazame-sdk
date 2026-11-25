<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Shipping extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'city',
    'country',
    'first_name',
    'last_name',
    'name',
    'postcode',
    'price',
    'state',
    'street',
];

    public string $address_addition;
    public string $alt_phone;
    public string $city;
    public string $country;
    public int $discount;
    public int $discount_rate;
    public string $first_name;
    public string $last_name;
    public \AplazameSDK\Enums\Shipping\MethodEnum $method;
    public string $name;
    public string $phone;
    public string $postcode;
    /**
     * Cents, tax not included
     */
    public int $price;
    public string $state;
    public string $street;
    public int $tax_rate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_addition' => is_string($value) ? $this->address_addition = $value : parent::assignMember($name, $value),
            'alt_phone' => is_string($value) ? $this->alt_phone = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'discount' => is_int($value) ? $this->discount = $value : parent::assignMember($name, $value),
            'discount_rate' => is_int($value) ? $this->discount_rate = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = \AplazameSDK\Enums\Shipping\MethodEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'postcode' => is_string($value) ? $this->postcode = $value : parent::assignMember($name, $value),
            'price' => is_int($value) ? $this->price = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            'tax_rate' => is_int($value) ? $this->tax_rate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
