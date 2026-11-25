<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs\Author\AllOfSocials;

final class BlueskyDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', 'string'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 200,
            ],
        ],
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 0,
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
