<?php

declare(strict_types=1);

namespace AplazameSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
        'privateKey' => [
            'type' => 'http',
            'scheme' => 'bearer',
            'location' => null,
            'parameterName' => null,
        ],
    ];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
