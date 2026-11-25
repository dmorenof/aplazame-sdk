<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Customer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
];

    public \AplazameSDK\DTOs\Customer\AddressDTO $address;
    /**
     * Format: date
     */
    public string $birthday;
    /**
     * Format: date-time
     */
    public string $date_joined;
    public string $email;
    public string $first_name;
    /**
     * 0 not known, 1 male, 2 female, 3 not applicable
     */
    public \AplazameSDK\Enums\Customer\GenderEnum $gender;
    public string $id;
    public string $language;
    /**
     * Format: date-time
     */
    public string $last_login;
    public string $last_name;
    public string $phone;
    /**
     * g guest, n new, e existing
     */
    public \AplazameSDK\Enums\Customer\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'birthday' => is_string($value) ? $this->birthday = $value : parent::assignMember($name, $value),
            'date_joined' => is_string($value) ? $this->date_joined = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'gender' => is_int($value) ? $this->gender = \AplazameSDK\Enums\Customer\GenderEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'last_login' => is_string($value) ? $this->last_login = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \AplazameSDK\Enums\Customer\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
