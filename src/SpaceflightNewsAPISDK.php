<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK;

abstract class SpaceflightNewsAPISDK
{
    public static function configure(Configuration $configuration): void
    {
        Client::configure($configuration);
    }

    protected static function client(): Client
    {
        return Client::current();
    }
}
