<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ryanmas2_WPKZH');

/** Database username */
define('DB_USER', 'ryanmas2_WPKZH');

/** Database password */
define('DB_PASSWORD', 'qcyJe8Dmij]22s&N7');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'c2dd810c027ebc3179d4c14a74290b5596790675b76e93512ab47a2c4849050e');
define('SECURE_AUTH_KEY', 'f5fcceb76655c454272d2f107ad5a643cf331791c30d0827bbb5c8c3ae2aa903');
define('LOGGED_IN_KEY', '79e4c566af17ba19450ee9670786b0ed27c68fb3fbf82ff49c7c23559a4ff677');
define('NONCE_KEY', 'bb7021bf51b4e6ea860e3831c6e3531969bbdfebd451dd13bd8f770e8cde8387');
define('AUTH_SALT', '335fb9bedd74de235fcb2d414eef37fb7d9c5b30e448946529eb8d0ca1730462');
define('SECURE_AUTH_SALT', '495461f12ae7118c225c1a54a141303edbbd6d89ce35262c8774975776a6b0aa');
define('LOGGED_IN_SALT', '4af418a577904e1a0aeaab41d6f23c3668b90d1563efb4a1b5eb1471ae013186');
define('NONCE_SALT', '08b6f720f8bda962ac6ed6edb9cf69387ba4782d4d606a9d8f6d7ca0ee6bdc45');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kdi_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
