<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\V4;

final class Articles extends \SpaceflightNewsSDK\SpaceflightNewsAPISDK
{
    /** GET /v4/articles/ [operationId: articles_list] */
    public static function get(?\SpaceflightNewsSDK\GetParams\V4\Articles $params = null): \SpaceflightNewsSDK\DTOs\Paginated\ArticleList
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Articles::class)->get($params);
    }

    /** GET /v4/articles/{id}/ [operationId: articles_retrieve] */
    public static function getById(int $id): \SpaceflightNewsSDK\DTOs\Article
    {
        return self::client()->resource(\SpaceflightNewsSDK\Resources\V4\Articles::class)->getById($id);
    }
}
