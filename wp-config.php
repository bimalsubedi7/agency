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
define( 'DB_NAME', 'firstproject' );

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
define( 'AUTH_KEY',         '{(zVYwUAx}KV@P~re* ^klGf4*97T^DA}BT^6-@b$o;%)t5vE!PHyVy1ic{77O3h' );
define( 'SECURE_AUTH_KEY',  '>i:/Lm`!|DvicJ&u$T4Uybp_W&[rad)(ZWqRZiL8O*=%Q:6e@m20X2q6Rb,UQXc&' );
define( 'LOGGED_IN_KEY',    'rXRssCdo00QOG7:]A@*rc2Vb6WBh4D1K6k}ro`&j;<Ku;h?W5seo9:7d($:JZ1$)' );
define( 'NONCE_KEY',        'H&LV#b*!Wc1va#:qPUvnU_mgE1J{|Zzk4n-&UcD[]KuqKf{}0P#y@yxG=}~0`vre' );
define( 'AUTH_SALT',        'Rx//u66a@;3Nld,@rV#f1gJs8hC&0T;@X*7dhoBQT/_+>Nv@46Qetnjofa=|j+y^' );
define( 'SECURE_AUTH_SALT', 'f#(`7/4Vn28hww/ JG8N~;7M]%6>k1sfV57LeHBKM;9He:r sdyJ`RW0|!99PC_O' );
define( 'LOGGED_IN_SALT',   '<)}F$72nQ86nJ!pIB,>KeEq&mo=&+xDt$70^!F4jgFKn3zMgqUgmj=BHh[!E4YZK' );
define( 'NONCE_SALT',       '=t:cMMlmEI{Pq$%Ll4([1VFpW`{;bxV6_LxZ[,aC64 uv*$?2*pUY:8dxO$%(kgq' );

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
