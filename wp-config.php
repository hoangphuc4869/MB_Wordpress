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
define( 'DB_NAME', 'matbao' );

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
define( 'AUTH_KEY',         '^[1k~1B-<u8%@LF Uh5HlDHOfJ^QqNRy_F[}[C`KzdJGT^[S*)@RTmNT+8TcS3~U' );
define( 'SECURE_AUTH_KEY',  '`MRF.e|Ky. (G~p9lp,g<@*;G8CE@)gcE/R=O[axQ.G8?L2[-c{qTG)Vsac?m2Cn' );
define( 'LOGGED_IN_KEY',    'rt,zH.wD]wL.<sdHvzte.fyd}$P7Qd%2f10!DshiC2aTr69F^g&)Q$J@EK_[>[)w' );
define( 'NONCE_KEY',        '0<+bGT/A@R*pWLma},ugXKh}l# MC7jD1D(nb!I.mKv7rd>,kxW.WlIR#fsQ%j.^' );
define( 'AUTH_SALT',        'RD~d[UF&$b/q;1j;S*|+(W3B,9n!tB)/,]-EozCD^Ef_{4*Md,1^;Vn^96hmL1xN' );
define( 'SECURE_AUTH_SALT', '9Oe4|4,^NZh>n1|JPHq&6B@xi@.}y=MoH_zrApl#p5prL/[_Mo9wLSnI[4O::B }' );
define( 'LOGGED_IN_SALT',   '*q&S(!kEN]gbVS/Et;/p<e{EeLS+<-*P`tep|+9FM%kmuBX/?*oa!;W)Btk1kSOP' );
define( 'NONCE_SALT',       'sOSMB@kh(]>wSBu[[;_T7T3z(}e_QBz^R5~n;GMum8AF_9jK.%!qoq;C,mLMv[$8' );

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
