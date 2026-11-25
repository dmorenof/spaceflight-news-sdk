<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Resources\V4;

final class Articles extends \SpaceflightNewsSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v4/articles/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Paginated\\ArticleList',
        'querySerialization' => [
            'event' => 'csv',
            'launch' => 'csv',
            'ordering' => 'csv',
        ],
    ];

    public function get(?\SpaceflightNewsSDK\GetParams\V4\Articles $params = null): \SpaceflightNewsSDK\DTOs\Paginated\ArticleList
    {
        /** @var \SpaceflightNewsSDK\DTOs\Paginated\ArticleList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v4/articles/{id}/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Article',
    ];

    public function getById(int $id): \SpaceflightNewsSDK\DTOs\Article
    {
        /** @var \SpaceflightNewsSDK\DTOs\Article $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
