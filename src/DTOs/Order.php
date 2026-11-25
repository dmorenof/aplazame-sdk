<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Order extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'articles',
        'currency',
        'id',
        'total_amount',
    ];

    public \AplazameSDK\Collections\Order\ArticlesCollection $articles;
    public int $cart_discount;
    public int $cart_discount_rate;
    /**
     * ISO 4217
     */
    public string $currency;
    public int $discount;
    public int $discount_rate;
    public string $id;
    public \AplazameSDK\DTOs\Order\Options $options;
    public int $tax_rate;
    /**
     * Cents
     */
    public int $total_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'articles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->articles = new \AplazameSDK\Collections\Order\ArticlesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \AplazameSDK\DTOs\Article::class)) : parent::assignMember($name, $value),
            'cart_discount' => is_int($value) ? $this->cart_discount = $value : parent::assignMember($name, $value),
            'cart_discount_rate' => is_int($value) ? $this->cart_discount_rate = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'discount' => is_int($value) ? $this->discount = $value : parent::assignMember($name, $value),
            'discount_rate' => is_int($value) ? $this->discount_rate = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \AplazameSDK\DTOs\Order\Options($value) : parent::assignMember($name, $value),
            'tax_rate' => is_int($value) ? $this->tax_rate = $value : parent::assignMember($name, $value),
            'total_amount' => is_int($value) ? $this->total_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
