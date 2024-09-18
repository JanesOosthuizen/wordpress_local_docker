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
define( 'DB_NAME', 'unherd_wp_db' );

/** Database username */
define( 'DB_USER', 'unherd_wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'unherd_wp_db_p455w0rd' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Y1E^.3XQMKU,[|L~)UF&`71KjkFkY:Aa4vP ABX2*4a:[I}$fbuE%s`/|o|i?0 1' );
define( 'SECURE_AUTH_KEY',  'IDda%+qZS|ghUad5%n]?+[UlFL%aF1{6Xe^lCetn0,@}}&]KmS4]9O!dvarvUd`7' );
define( 'LOGGED_IN_KEY',    '5.Z;&}u)}p~(t+Cw,KlRh!Be),zcCX@eyQR+7bz3gbZKsf^4qru8cwB]}6_P+s5f' );
define( 'NONCE_KEY',        'EH8T/sqpr 29R2 7=UrtLB{jfN.MFZPIu`)]&nu3601a#*q+!q[ZRgF ,Q,VF&|t' );
define( 'AUTH_SALT',        'Z0OHT)pky=^+N>N~gno~DgX:H.F3,AH.3Aln|r,P{#JmIRash os2vtT <w;:@].' );
define( 'SECURE_AUTH_SALT', 'ww1+vW7Odb>y,NbU)k`.X6X+EK9Z).|,gYjdx($!ViFwVHNV>}6J5{Vb*ztG&6Lm' );
define( 'LOGGED_IN_SALT',   'Vhko9;N2CJaRsR;&6PKfVhI>lQ7]lx~/?/^Nr:sqZ{:3jz-Nz!)0,/Jkwk816aP8' );
define( 'NONCE_SALT',       '>RNHi6J)R8XVi2&v0zZ8iAc<Yf{~pu>=d|J[~^VEV/ WY2ZKM4xeR65~%*!V}7iu' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';