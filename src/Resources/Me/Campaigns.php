<?php

declare(strict_types=1);

namespace AplazameSDK\Resources\Me;

final class Campaigns extends \AplazameSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/me/campaigns',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\AplazameSDK\\DTOs\\CampaignList',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
    ];

    /**
     * List financing campaigns
     */
    public function get(?\AplazameSDK\GetParams\Me\Campaigns $params = null): \AplazameSDK\DTOs\CampaignList
    {
        /** @var \AplazameSDK\DTOs\CampaignList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/me/campaigns',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\AplazameSDK\\DTOs\\Campaign',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Campaign\\Input',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create a financing campaign
     */
    public function post(\AplazameSDK\DTOs\Campaign\Input $payload): \AplazameSDK\DTOs\Campaign
    {
        /** @var \AplazameSDK\DTOs\Campaign $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CAMPAIGN_ID = [
        'method' => 'DELETE',
        'path' => '/me/campaigns/{campaignId}',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Delete a campaign
     */
    public function deleteByCampaignId(string $campaignId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CAMPAIGN_ID), path: ['campaignId' => $campaignId]);
        return;
    }

    private const array GET_BY_CAMPAIGN_ID = [
        'method' => 'GET',
        'path' => '/me/campaigns/{campaignId}',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\AplazameSDK\\DTOs\\Campaign',
        'responseMediaType' => 'application/vnd.aplazame.v1+json',
    ];

    /**
     * Campaign details
     */
    public function getByCampaignId(string $campaignId): \AplazameSDK\DTOs\Campaign
    {
        /** @var \AplazameSDK\DTOs\Campaign $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CAMPAIGN_ID), path: ['campaignId' => $campaignId]);
        return $result;
    }

    private const array PATCH_BY_CAMPAIGN_ID = [
        'method' => 'PATCH',
        'path' => '/me/campaigns/{campaignId}',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Campaign\\Patch',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Partially edit a campaign
     */
    public function patchByCampaignId(string $campaignId, \AplazameSDK\DTOs\Campaign\Patch $payload): void
    {
        $this->executeBody(self::operation(self::PATCH_BY_CAMPAIGN_ID), $payload, path: ['campaignId' => $campaignId]);
        return;
    }

    private const array PUT_BY_CAMPAIGN_ID = [
        'method' => 'PUT',
        'path' => '/me/campaigns/{campaignId}',
        'security' => [
            [
                'privateKey' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\AplazameSDK\\DTOs\\Error',
            401 => null,
            403 => null,
            404 => null,
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\AplazameSDK\\DTOs\\Error',
                'schemaNullable' => false,
                'mediaType' => 'application/vnd.aplazame.v1+json',
            ],
            401 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            403 => [
                'type' => null,
                'schemaNullable' => false,
            ],
            404 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\AplazameSDK\\DTOs\\Campaign\\Input',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Edit a campaign
     */
    public function putByCampaignId(string $campaignId, \AplazameSDK\DTOs\Campaign\Input $payload): void
    {
        $this->executeBody(self::operation(self::PUT_BY_CAMPAIGN_ID), $payload, path: ['campaignId' => $campaignId]);
        return;
    }

}
