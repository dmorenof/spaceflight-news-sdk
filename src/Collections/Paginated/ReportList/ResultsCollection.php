<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\Collections\Paginated\ReportList;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\SpaceflightNewsSDK\DTOs\Report> */
final class ResultsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \SpaceflightNewsSDK\DTOs\Report::class;
}
