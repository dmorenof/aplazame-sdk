<?php

declare(strict_types=1);

namespace AplazameSDK\Me;

final class Campaigns extends \AplazameSDK\AplazameAPISDK
{
    /** GET /me/campaigns [operationId: listCampaigns] */
    /**
     * List financing campaigns
     */
    public static function get(?\AplazameSDK\GetParams\Me\Campaigns $params = null): \AplazameSDK\DTOs\CampaignList
    {
        return self::client()->resource(\AplazameSDK\Resources\Me\Campaigns::class)->get($params);
    }

    /** POST /me/campaigns [operationId: createCampaign] */
    /**
     * Create a financing campaign
     */
    public static function post(\AplazameSDK\DTOs\Campaign\Input $payload): \AplazameSDK\DTOs\Campaign
    {
        return self::client()->resource(\AplazameSDK\Resources\Me\Campaigns::class)->post($payload);
    }

    /** DELETE /me/campaigns/{campaignId} [operationId: deleteCampaign] */
    /**
     * Delete a campaign
     */
    public static function deleteByCampaignId(string $campaignId): void
    {
        self::client()->resource(\AplazameSDK\Resources\Me\Campaigns::class)->deleteByCampaignId($campaignId);
    }

    /** GET /me/campaigns/{campaignId} [operationId: getCampaign] */
    /**
     * Campaign details
     */
    public static function getByCampaignId(string $campaignId): \AplazameSDK\DTOs\Campaign
    {
        return self::client()->resource(\AplazameSDK\Resources\Me\Campaigns::class)->getByCampaignId($campaignId);
    }

    /** PATCH /me/campaigns/{campaignId} [operationId: patchCampaign] */
    /**
     * Partially edit a campaign
     */
    public static function patchByCampaignId(string $campaignId, \AplazameSDK\DTOs\Campaign\Patch $payload): void
    {
        self::client()->resource(\AplazameSDK\Resources\Me\Campaigns::class)->patchByCampaignId($campaignId, $payload);
    }

    /** PUT /me/campaigns/{campaignId} [operationId: editCampaign] */
    /**
     * Edit a campaign
     */
    public static function putByCampaignId(string $campaignId, \AplazameSDK\DTOs\Campaign\Input $payload): void
    {
        self::client()->resource(\AplazameSDK\Resources\Me\Campaigns::class)->putByCampaignId($campaignId, $payload);
    }

}
