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
define( 'AUTH_KEY',          'RlZCL2u5:<-.*lEF2@bXOb4y/C?.eIpzGaOX|gd%qL!O]8o5bpcL!aS|MDS9|05[' );
define( 'SECURE_AUTH_KEY',   'gWjNk.7oh.#El05e!4f^-4<6mo{F%+s*ZE0_|6101evuMw.~J7lyjVE*3Jl8;H!h' );
define( 'LOGGED_IN_KEY',     'UN-n+[HDKlD ayn[T*f[Se4R&.7&S24}]R^WWK]?FvoUY}=chC)beEGgM!HGIsk$' );
define( 'NONCE_KEY',         ']&}.q}[mfI%LpJy]2u%-HLjYm(fxfxSz;?Oq&5t>TmF1Q+eiR,>b79IDUHDA-jCS' );
define( 'AUTH_SALT',         'LJP9@ERglHvMB7WIEyJ_R$<Kc<O)umk$A0C]m{Vgd~#s=1:: 1#]e<KG7G$W#-lT' );
define( 'SECURE_AUTH_SALT',  'pGobI`1r?b;X4;`&zjo3Psne6+@mtiK)cfFh P%u3aXkVn2Oo9ur)*M<`!8A0uG0' );
define( 'LOGGED_IN_SALT',    't~k&_uLFBC xQ}e(^ZU8&QP>P?n$U <!uPMPlN5^lD[e0Sej&+[eeSIE+k2:W;lx' );
define( 'NONCE_SALT',        'M:Bhk?? v@33D]r%ceF!6Ec(JZbe7@U`1-ZEP>aUA<D U*FV@Z)OGq 5ab?1T3c`' );
define( 'WP_CACHE_KEY_SALT', ' v!BQ?Xz-jz)of_,P/vdeM!oR5.f;sKw x6ut}=I2}|iq&`xEO|w47%YB%?Io=UG' );


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
