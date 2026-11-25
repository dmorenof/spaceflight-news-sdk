<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Collections\Article;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SpaceflightNewsSDK\DTOs\Event> */
final class EventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SpaceflightNewsSDK\DTOs\Event::class;
}
