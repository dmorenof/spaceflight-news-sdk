<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Resources\V4;

final class Reports extends \SpaceflightNewsSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v4/reports/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Paginated\\ReportList',
        'querySerialization' => [
            'ordering' => 'csv',
        ],
    ];

    public function get(?\SpaceflightNewsSDK\GetParams\V4\Reports $params = null): \SpaceflightNewsSDK\DTOs\Paginated\ReportList
    {
        /** @var \SpaceflightNewsSDK\DTOs\Paginated\ReportList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v4/reports/{id}/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Report',
    ];

    public function getById(int $id): \SpaceflightNewsSDK\DTOs\Report
    {
        /** @var \SpaceflightNewsSDK\DTOs\Report $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
