<?php

declare(strict_types=1);

namespace AplazameSDK\DTOs;

final class Merchant extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error_url',
        'notification_url',
        'pending_url',
        'success_url',
    ];

    protected const array VALIDATION = [
        'timeout_checkout' => [
            'minimum' => 1,
            'maximum' => 120,
        ],
        'timeout_extra' => [
            'minimum' => 0,
            'maximum' => 2880,
        ],
    ];

    public bool $close_on_success;
    public string $dismiss_url;
    public string $error_url;
    public string $ko_url;
    /**
     * Format: uri
     */
    public string $notification_url;
    public string $pending_url;
    public string $success_url;
    public int $timeout_checkout {
        set {
            $this->assigning('timeout_checkout', $value);
            $this->timeout_checkout = $value;
        }
    }
    public int $timeout_extra {
        set {
            $this->assigning('timeout_extra', $value);
            $this->timeout_extra = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'close_on_success' => is_bool($value) ? $this->close_on_success = $value : parent::assignMember($name, $value),
            'dismiss_url' => is_string($value) ? $this->dismiss_url = $value : parent::assignMember($name, $value),
            'error_url' => is_string($value) ? $this->error_url = $value : parent::assignMember($name, $value),
            'ko_url' => is_string($value) ? $this->ko_url = $value : parent::assignMember($name, $value),
            'notification_url' => is_string($value) ? $this->notification_url = $value : parent::assignMember($name, $value),
            'pending_url' => is_string($value) ? $this->pending_url = $value : parent::assignMember($name, $value),
            'success_url' => is_string($value) ? $this->success_url = $value : parent::assignMember($name, $value),
            'timeout_checkout' => is_int($value) ? $this->timeout_checkout = $value : parent::assignMember($name, $value),
            'timeout_extra' => is_int($value) ? $this->timeout_extra = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
