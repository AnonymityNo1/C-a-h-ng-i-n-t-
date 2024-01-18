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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'duan1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'nbUON9iWx41vORhWCbKRIPYIXmN6iqK06HiD0ELgSDProLmTkLBkZKmsRttOBEAd' );
define( 'SECURE_AUTH_KEY',  'ga83KMOvArQvC1cfkEKng7EEk3yWxxdtJXAFuf4XlOLQJx5pAswEoUP5ZLXmEydk' );
define( 'LOGGED_IN_KEY',    'Jwyh9mv9TEcaE6QOKr2IK95AmMnHqOlEAr3shGDYLYofeCxgJfmi31DIG1KR6msE' );
define( 'NONCE_KEY',        '5zBeVmPUYeYsBiyTlA5zEG07JZ68uhOVMXFbvnrvbIWm6EtD9EC53EHXpv5bMg0s' );
define( 'AUTH_SALT',        'oCFcHmaG4OKJyvfYXJ9qyedC7cNyyKgcZuiVJ5g3BsutVFq1w4RP3iLb91owtaPg' );
define( 'SECURE_AUTH_SALT', 'NjpihEaSfHid30qisHi2LxtQNG50xC5V2ZkGJDsO2U5JBd9CN0pxSFc8lnWrxvik' );
define( 'LOGGED_IN_SALT',   'laRKRap8HRPFnTLKdGdtGcFmlQeDMvch7Un2ITCbsagQmAdPLucCfQ6QMUBi3tHx' );
define( 'NONCE_SALT',       '1vlpDDa1k1wT3hO5kUO24uCrnqKRnZkNri4VTYmUTt2FmgVownV9n83CXK8xBBfD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
