<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use SpaceflightNewsSDK\Configuration;
use SpaceflightNewsSDK\GetParams\V4\Articles as ArticleFilters;
use SpaceflightNewsSDK\SpaceflightNewsAPISDK;
use SpaceflightNewsSDK\V4\Articles;

$configuration = new Configuration();
SpaceflightNewsAPISDK::configure($configuration);

$filters = new ArticleFilters();
$filters->search = 'starship';
$filters->limit = 5;

foreach (Articles::get($filters)->results as $article) {
    echo $article->published_at, ' ', $article->news_site, ': ', $article->title, "\n";
}
