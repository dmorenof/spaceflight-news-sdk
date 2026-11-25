<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs;

final class Launch extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'launch_id',
        'provider',
    ];

    protected const array READ_ONLY_FIELDS = [
        'provider',
    ];

    /**
     * Format: uuid
     */
    public string $launch_id;
    public string $provider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'launch_id' => is_string($value) ? $this->launch_id = $value : parent::assignMember($name, $value),
            'provider' => is_string($value) ? $this->provider = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
