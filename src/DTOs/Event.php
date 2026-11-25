<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs;

final class Event extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_id',
        'provider',
    ];

    protected const array VALIDATION = [
        'event_id' => [
            'minimum' => -2147483648,
            'maximum' => 2147483647,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'provider',
    ];

    public int $event_id {
        set {
            $this->assigning('event_id', $value);
            $this->event_id = $value;
        }
    }
    public string $provider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_id' => is_int($value) ? $this->event_id = $value : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
