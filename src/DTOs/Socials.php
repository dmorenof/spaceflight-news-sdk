<?php

declare(strict_types=1);

namespace SpaceflightNewsSDK\DTOs;

final class Socials extends \Dmorenof\SdkRuntime\DTO
{
    public \SpaceflightNewsSDK\DTOs\Socials\BlueskyDTO $bluesky;
    public \SpaceflightNewsSDK\DTOs\Socials\InstagramDTO $instagram;
    public \SpaceflightNewsSDK\DTOs\Socials\LinkedinDTO $linkedin;
    public \SpaceflightNewsSDK\DTOs\Socials\MastodonDTO $mastodon;
    public \SpaceflightNewsSDK\DTOs\Socials\XDTO $x;
    public \SpaceflightNewsSDK\DTOs\Socials\YoutubeDTO $youtube;
}
