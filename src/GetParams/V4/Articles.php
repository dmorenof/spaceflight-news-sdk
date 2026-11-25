<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\GetParams\V4;

final class Articles extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'event' => 'event',
            'has_event' => 'has_event',
            'has_launch' => 'has_launch',
            'is_featured' => 'is_featured',
            'launch' => 'launch',
            'limit' => 'limit',
            'news_site' => 'news_site',
            'news_site_exclude' => 'news_site_exclude',
            'offset' => 'offset',
            'ordering' => 'ordering',
            'published_at_gt' => 'published_at_gt',
            'published_at_gte' => 'published_at_gte',
            'published_at_lt' => 'published_at_lt',
            'published_at_lte' => 'published_at_lte',
            'search' => 'search',
            'summary_contains' => 'summary_contains',
            'summary_contains_all' => 'summary_contains_all',
            'summary_contains_one' => 'summary_contains_one',
            'title_contains' => 'title_contains',
            'title_contains_all' => 'title_contains_all',
            'title_contains_one' => 'title_contains_one',
            'updated_at_gt' => 'updated_at_gt',
            'updated_at_gte' => 'updated_at_gte',
            'updated_at_lt' => 'updated_at_lt',
            'updated_at_lte' => 'updated_at_lte',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'event' => [
            'items' => [
                'type' => 'int',
                'rules' => [],
            ],
        ],
        'launch' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
        'ordering' => [
            'items' => [
                'type' => 'string',
                'rules' => [
                    'enum' => [
                        '-published_at',
                        '-updated_at',
                        'published_at',
                        'updated_at',
                    ],
                ],
            ],
        ],
    ];

    /** @var list<int>|null */
    public ?array $event;
    public ?bool $has_event;
    public ?bool $has_launch;
    public ?bool $is_featured;
    /** @var list<string>|null */
    public ?array $launch;
    public ?int $limit;
    public ?string $news_site;
    public ?string $news_site_exclude;
    public ?int $offset;
    /** @var list<string>|null */
    public ?array $ordering;
    public ?string $published_at_gt;
    public ?string $published_at_gte;
    public ?string $published_at_lt;
    public ?string $published_at_lte;
    public ?string $search;
    public ?string $summary_contains;
    public ?string $summary_contains_all;
    public ?string $summary_contains_one;
    public ?string $title_contains;
    public ?string $title_contains_all;
    public ?string $title_contains_one;
    public ?string $updated_at_gt;
    public ?string $updated_at_gte;
    public ?string $updated_at_lt;
    public ?string $updated_at_lte;
}
