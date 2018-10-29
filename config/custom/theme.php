<?php
/**
 * Custom Default Theme
 *
 */

use Roots\WPConfig\Config;

if (env('CDK_THEME') && is_dir(Config::get(WP_CONTENT_DIR) . '/themes/' . env('CDK_THEME'))) {
    Config::define('WP_DEFAULT_THEME', env('CDK_THEME'));
}
