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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '4ff0c109ec0c929daa2fcf6e1e72e5436a6b72c5');
define('SECURE_AUTH_KEY',  '1c39b52c4dfd5e83f31d20de8cc67a73c185f1b6');
define('LOGGED_IN_KEY',    '1dccdb10d861f0e746e2523a00d99643210e2dc9');
define('NONCE_KEY',        '9083d5acdcc28ca2c186a62ee2bde1e177e2cbb6');
define('AUTH_SALT',        '13cd83c858909e54345eded2c071a96d36b24b81');
define('SECURE_AUTH_SALT', '3484ca3ad3260c702bcb9c52ca956f93561ee04c');
define('LOGGED_IN_SALT',   '8d8a90525685a3bbf415d14624ea884dd29bb353');
define('NONCE_SALT',       '4049ade7c550960b983c8ee12e2712bb95e3c3c1');

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
define('WP_DEBUG', false);

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


// OffloadS3
define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAJKYUXV6MXP74EA2Q' );
define( 'DBI_AWS_SECRET_ACCESS_KEY', '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' );
