<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs;

final class Info extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'news_sites',
        'version',
    ];

    public \SpaceflightNewsSDK\Collections\StringCollection $news_sites;
    public string $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'news_sites' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->news_sites = new \SpaceflightNewsSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
