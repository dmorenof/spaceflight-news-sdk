<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\V4;

final class Info extends \SpaceflightNewsSDK\SpaceflightNewsAPISDK
{
    /** GET /v4/info/ [operationId: info_retrieve] */
    public static function get(): \SpaceflightNewsSDK\DTOs\Info
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Info::class)->get();
    }
}
