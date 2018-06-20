<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', WORDPRESS_DB_NAME);

/** MySQL database username */
define('DB_USER', WORDPRESS_DB_USER);

/** MySQL database password */
define('DB_PASSWORD', WORDPRESS_DB_PASSWORD);

/** MySQL hostname */
define('DB_HOST', WORDPRESS_DB_PASSWORD);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c02dbc9064020c990f87b398e295f305f7834092');
define('SECURE_AUTH_KEY',  'edf2fcde4f0e315d6fe6963ddb38fc9276999d29');
define('LOGGED_IN_KEY',    '51652b3eff362d1dddcc261a11e109fda7158626');
define('NONCE_KEY',        '47d3d016329a4d6538970753036e99fbbc2fd877');
define('AUTH_SALT',        '093298fa244bd3dd586a88c0b5ff868b221a0868');
define('SECURE_AUTH_SALT', '854792d7ec0689a57963062ea39bd49b714bd526');
define('LOGGED_IN_SALT',   'd22b4bca8caaadf354866cfe8d7ee230347bdea6');
define('NONCE_SALT',       '53e69a4dd4b3b7d4b018adf190af61330398f597');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', WORDPRESS_DEBUG);

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
