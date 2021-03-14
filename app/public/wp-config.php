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
define('AUTH_KEY',         'IznMbjYdDrlja5hWFRbmN9qsAxu9SW749+LnZOHk2fpdwK7nvl6q0t27qVc8cJg3FMUnrffDSDjx+M5fFPEp9A==');
define('SECURE_AUTH_KEY',  'VFp+8aNsvHNnAGLlbXy1V/bfoYEDwlLKDhy9KPP9tW530PIkqZdj6ym1Sj8W3T7TGdhd6nsrOKwJwpn5CmYrQQ==');
define('LOGGED_IN_KEY',    'EHKfkUfWbLmILRoDjkvS1M0qKtKExYG58JZOfTGXeIOItaNLRfigvtAN0TjnrGelbQJ9qMKEJv3Fo0/D8u3MXQ==');
define('NONCE_KEY',        'WgNb137oh6BMb10xVJHrZ26zPH2nosa3hGEHskZk+q15GTZcLHut4+ufYi9CflraJtROJvGVAwxsB5BNacdrKw==');
define('AUTH_SALT',        '1rkl6A9dRhGIzmkYFdVj41IxbyZlBmKT71phSXReMiviCltQvjlND2vwr/t9LNbL0haJc3aLT58rV1cwEGfshg==');
define('SECURE_AUTH_SALT', 'Zth6irNDQVk2Ll9FqmOxZNOB2B779G0saNJKhQEQxMKJuNWlWus2flxpnbnMfFq8CRLOiBGCqraUyRAEkI8gnw==');
define('LOGGED_IN_SALT',   'ufV/aYLyJIlH28DkyYeLWK9yver1bpByVNFyJo4m43Ue4O3Xj6LPD/vZU1vURzv+RuD5uaJagP5WPdxhvMBnTg==');
define('NONCE_SALT',       'JfpUZbz3Jy1QoVdH9/12JL2WLv4Qr+JMJ3PT01R6c3EPzGPXvPgTs7YZvAT5/V8NJR7XiV0QVF4OlUHIZoFYGQ==');

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
