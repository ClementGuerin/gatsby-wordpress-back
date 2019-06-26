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
define( 'DB_NAME', 'gatsby-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', 'http://localhost/gatsby-wordpress/' );
    define( 'WP_HOME',    'http://localhost/gatsby-wordpress/' );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9CdB4XKG7rGbKffZ9HasalZo1rlO4QKtAhQpEz71RmuxYvu5MVC7uHgwuRswtRWM' );
define( 'SECURE_AUTH_KEY',  'uiTDcM1JpEzNREiPvcXmsUjcbjUIxzsElaBBEXpcYJS7To0e7suxGiSL3s7v1WyN' );
define( 'LOGGED_IN_KEY',    'RNVJKf7ZLxQ1Lizhk6iDUmdRwjgbuuOzvwzj4hTw5rNfe3IumP3rOfblPtmhcKyr' );
define( 'NONCE_KEY',        'dtBKT5l34LKCSHC7IA6wdWwFHbP6ZcwKgokv4GcIbOcO0VoEFlVR1QMAo51fIQas' );
define( 'AUTH_SALT',        'AYDQrxrjpD2QMkTzxtrNEoqk3cbyV8SErKhcs1G2hx8WuAWVVIsL9N6ab6g2VEa7' );
define( 'SECURE_AUTH_SALT', '1j11nEoMOaHErboEOMkrfIUQyljCkfVh2BsqfhnsoByEe1mj8WD0a858ey9AObyn' );
define( 'LOGGED_IN_SALT',   'v9onwIRSnGyfpGBBrjTbhEaWyTMp6YX6QUecemDfwLy5eIq58ILWVw881jSvLT7w' );
define( 'NONCE_SALT',       '6CtUs51o4uc3VDiNYEyFBlBJUIOmL8klubq11kiiDCBD5Xe41bcHvEyQhVR263qW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
