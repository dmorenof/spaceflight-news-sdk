<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs\Paginated;

final class BlogList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'count',
        'results',
    ];

    /**
     * Example: 123
     */
    public int $count;
    /**
     * Example: "http://api.example.org/accounts/?offset=400&limit=100"
     * Format: uri
     */
    public ?string $next;
    /**
     * Example: "http://api.example.org/accounts/?offset=200&limit=100"
     * Format: uri
     */
    public ?string $previous;
    public \SpaceflightNewsSDK\Collections\Paginated\BlogList\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'next' => $value === null || is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'previous' => $value === null || is_string($value) ? $this->previous = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \SpaceflightNewsSDK\Collections\Paginated\BlogList\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \SpaceflightNewsSDK\DTOs\Blog::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
