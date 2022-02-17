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
define( 'DB_NAME', 'nftpixeldust_db' );

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
define( 'AUTH_KEY',         'lp<YITS>|_!4NROb8=9!wmQnk9smh&D?0}$v}GoGSp$PI?a3t&^R(JO:VXWo4m+d' );
define( 'SECURE_AUTH_KEY',  'J!];vv3K4IqAMPo>pJ3T @SeFxLEYx^q}fsD4F=+1dTwq +t@ix{UnD >w-Gpk^!' );
define( 'LOGGED_IN_KEY',    '=ym`^h5s]f99qh,0=^r7~dGN7MS~#]n0XMl@hWVYZ|cTliBf><$){Q6nG4->]STg' );
define( 'NONCE_KEY',        'tV@hs<3M+uVsz<7xGWUY]~bD2y~:_C-?1SO387PKw<>Wzo8sC)EIQt[9h]n<v-}(' );
define( 'AUTH_SALT',        'kBI93V_UFv){a#3y1cPx~h[bUIFbXuxv})2f%]UW|FKF4kY0-{yX]ty gh[5*aiS' );
define( 'SECURE_AUTH_SALT', '-?wAw>BN Uq6X[o~?m3zYmE63keHfGxq^h]{h nSO*[FR4=>3$_jp_xrc+Z-0sD~' );
define( 'LOGGED_IN_SALT',   'u=/r) ]n$_=)0?bUoE+O_r831k3#!?UQm-W%Y`Pn+HTPNhI,:$n=^LE!MC^;Aq6>' );
define( 'NONCE_SALT',       'M25@btR,DtnhTb[JETC:TPMmE=QI^4-].l>VXY]w$UMD:/&WtNKXc!_whOtfU LV' );

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
