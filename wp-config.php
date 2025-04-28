<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'joalison_wp259' );

/** Database username */
define( 'DB_USER', 'joalison_wp259' );

/** Database password */
define( 'DB_PASSWORD', 'KS2p@u7U]3' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ymsrcpp81zilkdanfqtsaga97no3bpdraqfbth8afceajf66pfehihnie2kbqhj7' );
define( 'SECURE_AUTH_KEY',  'rcrtgioiakrhgbb1g5ekxx5j8toagnawsqyeieouend1kkgwdkhtmpwcwlcd4vlu' );
define( 'LOGGED_IN_KEY',    '0kscm9ngzi5ftwcvi3hput5fuqycqjdqmlvxpluabafze8xgc0o5hrz2vrt5zbn3' );
define( 'NONCE_KEY',        'rdj4jhgrlpsvtgzweyh1hxy63ujkyquchunxwizcpfgbkkv6qfpzieofzynvb6gx' );
define( 'AUTH_SALT',        'mngnflsakplnets3lszixxgw30b5hsgyj45olbgmmiumi3dzl3a3ynzaeka01bwq' );
define( 'SECURE_AUTH_SALT', 'g67o4ul6copnn8bi1unqqbqamujto3k2pm1qg3aqj4zshcuv6ht3bu03nxp4r9wc' );
define( 'LOGGED_IN_SALT',   'ywombg8jkn1sygjgdjrbz6azqswaekyjnttxkgcyp2tx2ant8bq21kyds8rns3vq' );
define( 'NONCE_SALT',       'wbpipp0nq9kdtr4qhcx9swxfzk3srkpstpcprnpthllos4uggw8nwwdoc854yd3m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpg7_';

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
