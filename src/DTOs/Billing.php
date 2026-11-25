<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Billing extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'city',
        'country',
        'first_name',
        'last_name',
        'postcode',
        'state',
        'street',
    ];

    public string $address_addition;
    public string $alt_phone;
    public string $city;
    public string $country;
    public string $first_name;
    public string $last_name;
    public string $phone;
    public string $postcode;
    public string $state;
    public string $street;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_addition' => is_string($value) ? $this->address_addition = $value : parent::assignMember($name, $value),
            'alt_phone' => is_string($value) ? $this->alt_phone = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'postcode' => is_string($value) ? $this->postcode = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
