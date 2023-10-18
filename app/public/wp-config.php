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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '4JlX6h439/c9joc9U+QgGPGoczXYGC5Ha/hN8EfD7EtMwqW97sj0Xn9laIu4F9g5WsY4vSM+BA/ncG26fzvvEA==');
define('SECURE_AUTH_KEY',  '/+JVtXa43cJ3aW/2wxoKAvt6Sd1+y1Ju30JQxWK2sRf+OgtLBnbnl51aW4P2bVnpYJHbEmklDfk3ISO+vaQn8g==');
define('LOGGED_IN_KEY',    'yXkAwrqEZHHhS42so/vVR8BnNHh+SqMzjSXVDJR7WDics3vEmsYuWRQw8Hpc7jTer4T59kjpXr61JpHORFBL+w==');
define('NONCE_KEY',        'TDjSVEhMGnrKtOFbUNIX6cFzrdE2FkbQVl6xiChWOCZuGGXjbxBofWJKRcYpq6bx3rqBAcwOXg+Q+7iger6L2w==');
define('AUTH_SALT',        'cRN//raeoaaszD0RpeTB36xaitIsAlqObOkmd/sH2LZlF7dyzblFWVb2HOYDnILehOeWgbTDaKgn2qWy5b1I6Q==');
define('SECURE_AUTH_SALT', 'iw3v8ZH1QRHGY6wmUJ8Pq3EYdcdfsOfQFxfZEJzjAozWi2TsfI0iNTT8F1HHwRDijq23Xa5QpB3VBk5x2pDYjw==');
define('LOGGED_IN_SALT',   'okjR67JvNDgPnFIooD25hIwMwQ5LbqCMb9FPeyy5vddIRbo+vIS/2KVxogvzW5/l2DVzp1zlY0mae6bEY0HodQ==');
define('NONCE_SALT',       'xfsRa7VA3SbqOyKYq99DBiG5qK679womTxjQ1y626O9ClSE9w5zjIMHTRTAg9AypWMGDiuYpeg7kOl3fw3dp6A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
