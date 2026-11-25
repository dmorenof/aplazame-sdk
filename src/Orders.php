<?php

declare(strict_types=1);

namespace AplazameSDK;

final class Orders extends \AplazameSDK\AplazameAPISDK
{
    /** GET /orders [operationId: listOrders] */
    /**
     * List orders (filters go in the query as `property-lookup=value`, e.g. `id-startswith=e791f`)
     */
    public static function get(?\AplazameSDK\GetParams\Orders $params = null): \AplazameSDK\DTOs\OrderList
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders::class)->get($params);
    }

    /** GET /orders/{orderId} [operationId: getOrder] */
    /**
     * Order details
     */
    public static function getByOrderId(string $orderId): \AplazameSDK\Responses\Orders\ByOrderId\ByOrderIdMapResponse
    {
        return self::client()->resource(\AplazameSDK\Resources\Orders::class)->getByOrderId($orderId);
    }

    /** PATCH /orders/{orderId} [operationId: patchOrder] */
    /**
     * Partially edit an order
     */
    public static function patchByOrderId(string $orderId, \AplazameSDK\DTOs\Order\Patch $payload): void
    {
        self::client()->resource(\AplazameSDK\Resources\Orders::class)->patchByOrderId($orderId, $payload);
    }

    /** PUT /orders/{orderId} [operationId: editOrder] */
    /**
     * Edit an order
     */
    public static function putByOrderId(string $orderId, \AplazameSDK\DTOs\Order\Edit $payload): void
    {
        self::client()->resource(\AplazameSDK\Resources\Orders::class)->putByOrderId($orderId, $payload);
    }
}
