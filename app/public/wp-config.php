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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BeWvl/UKDkvxo9BKxunG6CbJbKPVSRLVvyzt/59+Zv5hhjLCbr92UhLJlKJJj3UG35GmBmgPIMMr9wOokwmQpQ==');
define('SECURE_AUTH_KEY',  'xUES3Xsv+kqBTJEam4v0BRHSHK9+dmamYso4MOf9dp+nH6WQ23aar61HM9pJaGSZ4hYcMOmWBtANvOboMO0Hbw==');
define('LOGGED_IN_KEY',    'bZt43pNg3fxZRtxifZmsNHBVchikJuuVgq99y1croqeCAFqvm4AyzoH8LfDAHTVBmr6MOM9Eq3VEgtvt41tZ1w==');
define('NONCE_KEY',        'kxMbznBVjBLghmuZd1iijYgZcIErlURUUQcRUX+MaYAWMqveIfmv/d5Ws6wEOtbvFa+CrUN6snZd8YnJFtXhCg==');
define('AUTH_SALT',        'wrA6WO09PPWndiEqLL71EpaSBpi3DUeqrO9a1ThlEoBvZfIRpUfYdqvU9ZuRNLj3k0Y/YLXYqnuHmCHZF39UoQ==');
define('SECURE_AUTH_SALT', 'LWCp/z6p998j0vcD4lNSM4HeRPP9NIfjglWrXxYc3ov4rBjzX6BjiD+X5QyHNf911ptuaZ4jwPjGB7i2SXol/A==');
define('LOGGED_IN_SALT',   'P7m+h/j92BlmL9Km8JWdOZ2csd+eh1BjK4uJmalIuaMIpzTD4XpJeX6e9VIKpPxA19MfL1F4tTttgeihOo3g0w==');
define('NONCE_SALT',       'XfYaUA8g6FbTodlBoiIUyzDo+DnoP/PgJrNhHFbndQpwpeAA82pCD28uB9M/2ePJwU4DKtmv0UNP7Cs9PT2avA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
