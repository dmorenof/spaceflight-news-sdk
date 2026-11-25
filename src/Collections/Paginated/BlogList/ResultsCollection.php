<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Collections\Paginated\BlogList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SpaceflightNewsSDK\DTOs\Blog> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SpaceflightNewsSDK\DTOs\Blog::class;
}
