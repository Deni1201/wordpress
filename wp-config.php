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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Deni' );

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
define( 'AUTH_KEY',         '0^p0YUaKXVXVTI;&631i&OCx}(mG_)bj9W}B&b!Rq@x:D.lnfb*RA/i,e&W4CST>' );
define( 'SECURE_AUTH_KEY',  'i9GhWW&`M?UW$>n2t2*;ARtOda6^}O1)YL_xyHAu:q6Cuq[X<ugNK,quj[tzlal3' );
define( 'LOGGED_IN_KEY',    'uD!f3Pqg81u-0vUC!~z_/rRFY`]W/211~T}p<OqgfgDa_iqyfGK_<rn1nOG+xMyg' );
define( 'NONCE_KEY',        'OuKhX>)CE*-VT.B9_U%^eduRTU1]@_7!A5x@umU}eqNy?GP,1jmlIW|$ee;i :`n' );
define( 'AUTH_SALT',        '[u>~6pG2UG)9{Pchn0:{,L^Z4GWEw01?V$%3M?jV0Mhk?g*Ws!mF}G)BZNo1$E8b' );
define( 'SECURE_AUTH_SALT', 'fXxBnmUXftl)VADAcr|Q$k}H2oZX>X 9m~*kpiTw#Qg]}4.7;-JvJtzUV(BoIL#9' );
define( 'LOGGED_IN_SALT',   ']1(Zsy~rc^]2]mEejhX?L=0Q CKvs@+|}UI1>.L$wO-:^DU![v2&)-Oaw3xx,$,h' );
define( 'NONCE_SALT',       ';4%sLUBFOaqb3Ke./0>-ZErJ[h +L9[4[,|aWH=Ua%x4(<=nO<2LG8sKu1j1ss.;' );

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
