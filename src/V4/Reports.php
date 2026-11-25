<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\V4;

final class Reports extends \SpaceflightNewsSDK\SpaceflightNewsAPISDK
{
    /** GET /v4/reports/ [operationId: reports_list] */
    public static function get(?\SpaceflightNewsSDK\GetParams\V4\Reports $params = null): \SpaceflightNewsSDK\DTOs\Paginated\ReportList
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Reports::class)->get($params);
    }

    /** GET /v4/reports/{id}/ [operationId: reports_retrieve] */
    public static function getById(int $id): \SpaceflightNewsSDK\DTOs\Report
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Reports::class)->getById($id);
    }
}
