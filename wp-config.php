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
define( 'DB_NAME', 'hydroceanbdd' );

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
define( 'AUTH_KEY',         'Z_=.Oerledf$lVqb.begFhfwBc,.;?9j~/J Twhr--Az#~#%ej]-p~AMmC-yk$GJ' );
define( 'SECURE_AUTH_KEY',  'B[=Zs)X<ukyt3(2sxCHfekU/,_hcT v!JJ:9 V6YT/b.|4`8,{R/pQDCfDVf-ibf' );
define( 'LOGGED_IN_KEY',    '<VxMSNyso2//!$OUgV_Ip0e1B-Kr@3/~{gM|zSPd{|#v5Kx=Sd]vO5JG+4pBw91I' );
define( 'NONCE_KEY',        'ys!L=?J[8b=,(oB^Wf09bkIp5m:QodU?7C3:*%f4zq.&9Zno9&~ap=jR$Fh~SX5-' );
define( 'AUTH_SALT',        '~A?`p.a%=CM^*Yj@}E-TM7.}06o?qBX0x$T%j)H(LCmH2({gjGEz~%> WP8)`Sf>' );
define( 'SECURE_AUTH_SALT', 'bzMpN.8zu45AI/4[O}`5pirZ(5k?51aMCGgynJsre?}%EeM&<R*zm4M*{XYu!%nI' );
define( 'LOGGED_IN_SALT',   '${bXpc].,fvJ6W~f=a{|/8_?KVDjP1x?YFVMHB[b]f/.mvG3FrT]vwF3Kqm=B2LG' );
define( 'NONCE_SALT',       '#J2 F#23Px_fer$j6In&P$n#]!;|359^]h^*n<B5lGsTXBOtKutbihP%p~^C>~|R' );

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
