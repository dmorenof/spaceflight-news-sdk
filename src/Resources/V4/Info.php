<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Resources\V4;

final class Info extends \SpaceflightNewsSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v4/info/',
        'security' => [
            [],
        ],
        'responseType' => '\\SpaceflightNewsSDK\\DTOs\\Info',
    ];

    public function get(): \SpaceflightNewsSDK\DTOs\Info
    {
        /** @var \SpaceflightNewsSDK\DTOs\Info $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
