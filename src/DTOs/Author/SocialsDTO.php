<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs\Author;

final class SocialsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \SpaceflightNewsSDK\DTOs\Author\AllOfSocials\BlueskyDTO $bluesky;
    public \SpaceflightNewsSDK\DTOs\Author\AllOfSocials\InstagramDTO $instagram;
    public \SpaceflightNewsSDK\DTOs\Author\AllOfSocials\LinkedinDTO $linkedin;
    public \SpaceflightNewsSDK\DTOs\Author\AllOfSocials\MastodonDTO $mastodon;
    public \SpaceflightNewsSDK\DTOs\Author\AllOfSocials\XDTO $x;
    public \SpaceflightNewsSDK\DTOs\Author\AllOfSocials\YoutubeDTO $youtube;
}
