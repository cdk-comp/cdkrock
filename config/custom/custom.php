<?php
/**
 * Custom Configuration overrides
 */

use Roots\WPConfig\Config;

Config::define('WP_POST_REVISIONS', 3);
Config::define('AUTOSAVE_INTERVAL', 86400);

Config::define('WP_MEMORY_LIMIT', env('CDK_MEMORY'));
Config::define('WP_MAX_MEMORY_LIMIT', env('CDK_MEMORY'));

Config::define('MEDIA_TRASH', true);
Config::define('EMPTY_TRASH_DAYS', 10);
