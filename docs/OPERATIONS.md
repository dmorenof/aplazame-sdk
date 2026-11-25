# Aplazame SDK for PHP: operations

23 operations. Each is a static method of a facade class (`AplazameSDK\...`); configure the SDK once with `AplazameAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Create a checkout (installments by default; product.type selects pay_later or pay_in_4) | POST | `/checkout` | `Checkout::post()` |
| POS: create a checkout | POST | `/checkout/offline` | `Checkout\Offline::post()` |
| POS: checkout status | GET | `/checkout/{checkoutId}/status` | `Checkout\ByCheckoutId\Status::get()` |
| List financing campaigns | GET | `/me/campaigns` | `Me\Campaigns::get()` |
| Create a financing campaign | POST | `/me/campaigns` | `Me\Campaigns::post()` |
| Delete a campaign | DELETE | `/me/campaigns/{campaignId}` | `Me\Campaigns::deleteByCampaignId()` |
| Campaign details | GET | `/me/campaigns/{campaignId}` | `Me\Campaigns::getByCampaignId()` |
| Partially edit a campaign | PATCH | `/me/campaigns/{campaignId}` | `Me\Campaigns::patchByCampaignId()` |
| Edit a campaign | PUT | `/me/campaigns/{campaignId}` | `Me\Campaigns::putByCampaignId()` |
| List orders (filters go in the query as `property-lookup=value`, e.g. `id-startswith=e791f | GET | `/orders` | `Orders::get()` |
| Order details | GET | `/orders/{orderId}` | `Orders::getByOrderId()` |
| Partially edit an order | PATCH | `/orders/{orderId}` | `Orders::patchByOrderId()` |
| Edit an order | PUT | `/orders/{orderId}` | `Orders::putByOrderId()` |
| Cancel a confirmed order | POST | `/orders/{orderId}/cancel` | `Orders\ByOrderId\Cancel::post()` |
| Captures of an order | GET | `/orders/{orderId}/captures` | `Orders\ByOrderId\Captures::get()` |
| Request a capture (only for the pay-in-15-days product, on a confirmed order) | POST | `/orders/{orderId}/captures` | `Orders\ByOrderId\Captures::post()` |
| Refunds of a capture | GET | `/orders/{orderId}/captures/{captureId}/refunds` | `Orders\ByOrderId\Captures\ByCaptureId\Refunds::get()` |
| Refund a capture | POST | `/orders/{orderId}/captures/{captureId}/refunds` | `Orders\ByOrderId\Captures\ByCaptureId\Refunds::post()` |
| Send the customer's purchase history | POST | `/orders/{orderId}/history` | `Orders\ByOrderId\History::post()` |
| Remaining amount that can be refunded | GET | `/orders/{orderId}/refund` | `Orders\ByOrderId\Refund::get()` |
| Refund online financing | POST | `/orders/{orderId}/refund` | `Orders\ByOrderId\Refund::post()` |
| Voids of an order | GET | `/orders/{orderId}/void` | `Orders\ByOrderId\VoidResource::get()` |
| Void part of an order | POST | `/orders/{orderId}/void` | `Orders\ByOrderId\VoidResource::post()` |
