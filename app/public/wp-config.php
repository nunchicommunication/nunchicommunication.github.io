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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}ER#@da^,Oo(M+MtIhr7p#1.kc$`58b+2{_q`>VDOq9pH|Zj=o>X^8^F|51#zgD9' );
define( 'SECURE_AUTH_KEY',   'L9.[Qs15QOCe_():U)8GshuEZMU ^<a}_)K3e.ZSlXA16&~/uvE2nnVrQd?0xL8|' );
define( 'LOGGED_IN_KEY',     '5dP +;.()kp/L#KM__0!)df_+E!nac8#W%0w:yQ/C7 i5AlsY;b~]Zu2Yd.;2*4A' );
define( 'NONCE_KEY',         ':Tz0-vncO%:>XV{.i fLi8<!.A%;ShO],=X};) ;t[9aHK7<K.afqVL*apX/nO=X' );
define( 'AUTH_SALT',         'y4,S*9vuN2F80kg%{_5}_aqRmvhlD5D0ouQ%GG1XBdz>pOlkfL`CUu(?-ogt3WOI' );
define( 'SECURE_AUTH_SALT',  '0+7-3!j)HOY<CEk>jgYm;qi W#@;5YC23Z+))54M~~h(%h;5`3?^u)4GswkX0cYq' );
define( 'LOGGED_IN_SALT',    'XPi)|&BsZ;4:@=Ej#mf!!T]@Q+81uu<r>W20H%H}9o7skW&FewS)N#HIs JF[@(5' );
define( 'NONCE_SALT',        'PR.v_#TLBCaP3|LZIq?OQkTE>8m3~{.WUNPx=>o$*Y3;@^I)0ZNh=Sf=v~5&DA|k' );
define( 'WP_CACHE_KEY_SALT', 'nOe!8RB#tRwBMiv$)5%)K7j1*(xI5[bf#x>;)hy((}]O^1%J1/uQD?]qAR1awpd?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
