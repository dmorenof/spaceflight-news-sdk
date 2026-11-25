<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Collections\Paginated\ArticleList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SpaceflightNewsSDK\DTOs\Article> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SpaceflightNewsSDK\DTOs\Article::class;
}
