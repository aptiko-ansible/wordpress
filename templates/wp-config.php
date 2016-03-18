<?php

define('DB_NAME', 'wordpress_{{ wordpress_installation_name }}');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', '{{ wordpress_db_password }}');
define('DB_HOST', 'localhost');
define('DB_CHARSET', '{{ wordpress_db_charset }}');
define('DB_COLLATE', '');

define('AUTH_KEY', '{{ wordpress_auth_key }}');
define('SECURE_AUTH_KEY', '{{ wordpress_secure_auth_key }}');
define('LOGGED_IN_KEY', '{{ wordpress_logged_in_key }}');
define('NONCE_KEY', '{{ wordpress_nonce_key }}');
define('AUTH_SALT',        '{{ wordpress_auth_salt }}');
define('SECURE_AUTH_SALT', '{{ wordpress_secure_auth_salt }}');
define('LOGGED_IN_SALT',   '{{ wordpress_logged_in_salt }}');
define('NONCE_SALT',       '{{ wordpress_nonce_salt }}');

$table_prefix = 'wp_';

define('WP_DEBUG', false);
define('ABSPATH', '/usr/local/wordpress-{{ wordpress_installation_name }}/');
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
