<?php

declare(strict_types=1);

namespace AplazameSDK\Orders\ByOrderId\Captures\ByCaptureId;

final class Refunds extends \AplazameSDK\AplazameAPISDK
{
    /** GET /orders/{orderId}/captures/{captureId}/refunds [operationId: getCaptureRefunds] */
    /**
     * Refunds of a capture
     */
    public static function get(\AplazameSDK\PathParams\Orders\ByOrderId\Captures\ByCaptureId\Refunds $identifier): \AplazameSDK\DTOs\Capture
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Captures\ByCaptureId\Refunds::class)->get($identifier);
    }

    /** POST /orders/{orderId}/captures/{captureId}/refunds [operationId: createCaptureRefund] */
    /**
     * Refund a capture
     */
    public static function post(\AplazameSDK\PathParams\Orders\ByOrderId\Captures\ByCaptureId\Refunds $identifier, \AplazameSDK\DTOs\Amount $payload): \AplazameSDK\DTOs\Capture
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders\ByOrderId\Captures\ByCaptureId\Refunds::class)->post($identifier, $payload);
    }
}
