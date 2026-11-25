<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs;

final class Article extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'authors',
        'events',
        'id',
        'image_url',
        'launches',
        'news_site',
        'published_at',
        'summary',
        'title',
        'updated_at',
        'url',
    ];

    protected const array VALIDATION = [
        'image_url' => [
            'maxLength' => 500,
        ],
        'title' => [
            'maxLength' => 500,
        ],
        'url' => [
            'maxLength' => 500,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'id',
        'news_site',
        'updated_at',
    ];

    public \SpaceflightNewsSDK\Collections\Article\AuthorsCollection $authors;
    public \SpaceflightNewsSDK\Collections\Article\EventsCollection $events;
    public bool $featured;
    public int $id;
    /**
     * Format: uri
     */
    public string $image_url {
        set {
            $this->assigning('image_url', $value);
            $this->image_url = $value;
        }
    }
    public \SpaceflightNewsSDK\Collections\Article\LaunchesCollection $launches;
    public string $news_site;
    /**
     * Format: date-time
     */
    public string $published_at;
    public string $summary;
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $updated_at;
    /**
     * Format: uri
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->authors = new \SpaceflightNewsSDK\Collections\Article\AuthorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SpaceflightNewsSDK\DTOs\Author::class)) : parent::assignMember($name, $value),
            'events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->events = new \SpaceflightNewsSDK\Collections\Article\EventsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SpaceflightNewsSDK\DTOs\Event::class)) : parent::assignMember($name, $value),
            'featured' => is_bool($value) ? $this->featured = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'image_url' => is_string($value) ? $this->image_url = $value : parent::assignMember($name, $value),
            'launches' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->launches = new \SpaceflightNewsSDK\Collections\Article\LaunchesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SpaceflightNewsSDK\DTOs\Launch::class)) : parent::assignMember($name, $value),
            'news_site' => is_string($value) ? $this->news_site = $value : parent::assignMember($name, $value),
            'published_at' => is_string($value) ? $this->published_at = $value : parent::assignMember($name, $value),
            'summary' => is_string($value) ? $this->summary = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
