<?php
/** Multisite */

use Roots\WPConfig\Config;

/**
 * Cookie settings
 *
 * Resolving The WordPress Multisite Redirect Loop
 *
 * @link https://tommcfarlin.com/resolving-the-wordpress-multisite-redirect-loop/
 */
if (filter_var(env('WP_MULTISITE_SUBDOMAIN_INSTALL'), FILTER_VALIDATE_BOOLEAN)) {
    Config::define('COOKIE_DOMAIN', $domain);
    Config::define('ADMIN_COOKIE_PATH', '/');
}

Config::define('WP_ALLOW_MULTISITE', env('WP_ALLOW_MULTISITE'));
Config::define('MULTISITE', env('WP_MULTISITE'));
Config::define('SUBDOMAIN_INSTALL', false);
Config::define('DOMAIN_CURRENT_SITE', env('CDK_HOST'));
Config::define('PATH_CURRENT_SITE', '/');
Config::define('SITE_ID_CURRENT_SITE', 1);
Config::define('BLOG_ID_CURRENT_SITE', 1);
