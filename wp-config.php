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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maryam' );

/** MySQL database username */
define( 'DB_USER', 'rihan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@ssw0rd' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '{nR;.}wZ$OzW&5RdM]+0~qDI{hSpG&*fNIs)l}|8kRb$ &>s<m#$Yyzq.Z+Xqu8;' );
define( 'SECURE_AUTH_KEY',  'H^auA+>opOtnQZ[#e.,S[/U?LmkU47e1plQe67RR$VH$e{Fyi~-CMqd[j$s5O4J:' );
define( 'LOGGED_IN_KEY',    'd.2]^|^tSxDxBz:hNL:W7hJ.c+6kf{JK86BU~07/LF(N;`Ly2{ys_m:+A5&|o)Q|' );
define( 'NONCE_KEY',        'dQ0Q/U`>{~JCovH)k#LG{Nr<u0=&!$h>.P-}-!~]8[Oe7]8UF0MeMn5}YP|5x)Av' );
define( 'AUTH_SALT',        '}eF.J^q$8*m;.=|M<Bus*hs~9]W/L.q~F.M.&E6^D?E,9;3o#L!-:e&89tA6r9>t' );
define( 'SECURE_AUTH_SALT', 'FN&{S(Os%!^]|43r=iK37O]kdIV_O3:mU~S)iOkrR/z<Q1 h95eLg-l5f(aA7>j[' );
define( 'LOGGED_IN_SALT',   'unsx^x^=7e+L-21f@Yi]K^+0I%:s#l^p*l,Dep  hRH&2u$EgA[voiRaEP#vK @r' );
define( 'NONCE_SALT',       'd?.*ZG]a);Mm|gM6W.bRU!1dkJB5A6cIAC*./uws#)oSljYkl?G.hdl(]ksbK:SP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wm_';

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
