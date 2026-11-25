<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Resources\V4;

final class Blogs extends \SpaceflightNewsSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v4/blogs/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Paginated\\BlogList',
        'querySerialization' => [
            'event' => 'csv',
            'launch' => 'csv',
            'ordering' => 'csv',
        ],
    ];

    public function get(?\SpaceflightNewsSDK\GetParams\V4\Blogs $params = null): \SpaceflightNewsSDK\DTOs\Paginated\BlogList
    {
        /** @var \SpaceflightNewsSDK\DTOs\Paginated\BlogList $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v4/blogs/{id}/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Blog',
    ];

    public function getById(int $id): \SpaceflightNewsSDK\DTOs\Blog
    {
        /** @var \SpaceflightNewsSDK\DTOs\Blog $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
