<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\V4;

final class Blogs extends \SpaceflightNewsSDK\SpaceflightNewsAPISDK
{
    /** GET /v4/blogs/ [operationId: blogs_list] */
    public static function get(?\SpaceflightNewsSDK\GetParams\V4\Blogs $params = null): \SpaceflightNewsSDK\DTOs\Paginated\BlogList
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Blogs::class)->get($params);
    }

    /** GET /v4/blogs/{id}/ [operationId: blogs_retrieve] */
    public static function getById(int $id): \SpaceflightNewsSDK\DTOs\Blog
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Blogs::class)->getById($id);
    }
}
