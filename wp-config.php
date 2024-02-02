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
define( 'DB_NAME', 'musunny_db' );

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
define( 'AUTH_KEY',         '/c8)t5LzzCW#j_AuK-;qHn&UfPng_>8OLfg[yUFz=oUY:;6F}7:>{NgJ2/$sqFp&' );
define( 'SECURE_AUTH_KEY',  'QU~_Nf`>!Oo~(jt>3hcfo;in+%3}ic{{Bx!TL4MLfK%-4}J~8~dI0Z]:k?ao-Bj[' );
define( 'LOGGED_IN_KEY',    'Sj#(4/byaA`Ntzf2&V]YX.?viM.lGKe,*=ApUw3&rB#{:+tw{9j+%xndW!IFpdv8' );
define( 'NONCE_KEY',        '|>~i;L9APS+x9DjkCeWx8_U&q.x*f c!~@4S~0N |6*7XfQ&h]f*<hr%t$~~fcu ' );
define( 'AUTH_SALT',        ':q}9)V*3P{UcT#1Y@7gF!2tPJBG<<WEXJ0WLb9KNbceq80E86FuH@;xhDcg^.8Ni' );
define( 'SECURE_AUTH_SALT', '>U5IIV$-b/XFg6b#@l[.MH,^RN)`wv[-T=,%&%8*Zh-]9cPO<pmuGl@=;Er|B(jw' );
define( 'LOGGED_IN_SALT',   '`E%RsrseiU=w5USd1n:9w4<O:|(XEeJV+S$?RwsiM/E;1<SPG&0:!6mmve!XMO;o' );
define( 'NONCE_SALT',       'L)yP=xoivx!`l+S+(2T`b>M6lx4:#K83fl+%yw;h>u~v%1FGT8/v(k&!v#KZbeWI' );

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
