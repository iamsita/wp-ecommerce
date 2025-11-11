<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@G 3a:kJUsL{l_B3iP+nqBslkZN~6=w<HhG/T`#(2+r<*4R`KX9VK->!hbv1w<vT' );
define( 'SECURE_AUTH_KEY',  'b5k[>?/,U_{ yDA73(g#{yGNaD=I#A.i.lIu!e%3kNQ?(@%.<yE@$NzYZ+,K.58Z' );
define( 'LOGGED_IN_KEY',    'tQQ+kpUZp&U<x2fj_.r{2c;H$/1Asv#C7?QVM#xI{nV`ZpR]LED+znXvONXi8]uH' );
define( 'NONCE_KEY',        '.ywP(K^%l{; w1@aRL8U+?@+7W.%xM^!{8]yn/|$m$$Mu:#VzRjF>@kH9E)Q~kZ#' );
define( 'AUTH_SALT',        'P*Ilh^,CJmc{nA$zz`<GlK1`U{p/ .+jb5b|^42^Kbp!X3tG0#4>Nal*WF!P*]Q]' );
define( 'SECURE_AUTH_SALT', '2{HAanNvc&IN[g?(Ii^CBnPBP]YnV]#CK&8`HV]J$W_f4J7r*`CzW*7N$6oDT4HC' );
define( 'LOGGED_IN_SALT',   '{(8 ^` vay/+`]:>(i3#|_q-8V` ZRt+,5*F=F[N::z7XWRG}3rwz:M~Ti~=&(do' );
define( 'NONCE_SALT',       'XbFK5 6hE4rsB}M{>2F +AMsvElxpU@3I~ 2,.:QhZ2D<?UtBcYIp[.C}91Hu>(!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
