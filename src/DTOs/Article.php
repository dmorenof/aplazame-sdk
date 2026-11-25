<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Article extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'image_url',
        'name',
        'price',
        'quantity',
        'url',
    ];

    public string $description;
    public int $discount;
    public int $discount_rate;
    public string $id;
    /**
     * Format: uri
     */
    public string $image_url;
    public string $name;
    /**
     * Cents, tax not included
     */
    public int $price;
    public int $quantity;
    public int $tax_rate;
    /**
     * Format: uri
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discount' => is_int($value) ? $this->discount = $value : parent::assignMember($name, $value),
            'discount_rate' => is_int($value) ? $this->discount_rate = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'image_url' => is_string($value) ? $this->image_url = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'price' => is_int($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'tax_rate' => is_int($value) ? $this->tax_rate = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
