<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Collections\Article;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SpaceflightNewsSDK\DTOs\Author> */
final class AuthorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SpaceflightNewsSDK\DTOs\Author::class;
}
