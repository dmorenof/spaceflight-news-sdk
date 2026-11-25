<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Collections\Article;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SpaceflightNewsSDK\DTOs\Launch> */
final class LaunchesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SpaceflightNewsSDK\DTOs\Launch::class;
}
