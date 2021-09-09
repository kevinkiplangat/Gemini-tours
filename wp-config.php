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
define( 'DB_NAME', 'kevinprac' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' UJF1rK0w;Bb;-Ie|6mr@7`{_1+HFvpSRsga>LgM.3A%Zg-?>*N)_fL!V%Z/U5<L' );
define( 'SECURE_AUTH_KEY',  '0>C0[WO%TJ!jQ}b?c-m<@u@/rskiaz1`/<XW1dRF`T/ffs} m**6c&^c<cPz1{ m' );
define( 'LOGGED_IN_KEY',    'kR2 tAN8g0X)_d^0H`Ek(6Y-<p)QYuDSW6PEa&$Dv2}JR|aQiFu)e=Y-l0$t*b0t' );
define( 'NONCE_KEY',        'No{8pFc[52WNyF*e+`K#[.9$d}Nu):)Wpojq/AFP9*i(hgc.mhkL@BG<hYD/T/I7' );
define( 'AUTH_SALT',        'v[tdAO-]FW(z?&BA)5q[+^zd3}<s|fo;s`L70?ZcSax>-8|_p_}.$MXuSV?6,[UL' );
define( 'SECURE_AUTH_SALT', 'uCMq|@OjP[wbbWo9qOe_h%v_{C?D_mz/CuYzjByq6hZX]JTjFm7H+7QC`5[Q%4Fw' );
define( 'LOGGED_IN_SALT',   '+CD>AOj)!6cCUHRh])*q LJtF~:o1G^_WLf,E<>;CDfO9#CqE{HLj?,l;y=M.m*-' );
define( 'NONCE_SALT',       ':K[EyFY,lOT43%P_;#EQ BmGU~-r{P1>UalkFCD^/R$%pj;4.KhFsQWYNo1+Wu!T' );

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
