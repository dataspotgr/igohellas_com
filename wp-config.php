<?php
define( 'WP_CACHE', true );

  
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
define( 'DB_NAME', "igohellas_ds_2025" );

/** Database username */
define( 'DB_USER', "igohellas_ds_user_2025" );

/** Database password */
define( 'DB_PASSWORD', "%4oajvE@9kBiK6%R" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define('AUTH_KEY', '(p:r4Q0pHE]q6Xe&EvU19Jb4kY(_65-QP04v/9]v9V+pBDJq7ySF!9e@+/LQ[je_');
define('SECURE_AUTH_KEY', 'E642/|62dGfZHrGzhXS#98@(w_*0_*imc4]4q%2f:9u3my[2g75!4QQ-y9!0k;Vj');
define('LOGGED_IN_KEY', '|Xs9*3d(E))ei#3yrL!BF8-n17!j9Sbr(#q%qkzoH~p:wShG()3181Mm_n5UJ(m8');
define('NONCE_KEY', 'VbPKp_HR%z;u903q3J@T4u*u0u+oTQt#H(_B/0z86u0N9Z8!Dx470q)~1X-h(RKj');
define('AUTH_SALT', '2@s9j5cZdb!HC6#8k*m&[53yi%:3(KEcTXib&JPE2Rb0w-&4gO#vGcyrT4ydA[#a');
define('SECURE_AUTH_SALT', '77vRe)|6pN8]i7V#8tBN@C!sj9jS2J76~8|KqOn*#NHowJ2@9+Jgfo|Ra7m:5AE5');
define('LOGGED_IN_SALT', 'u!EQIzJy*7M9AsYo_I-8)6o+92Q&389]Av%88go&P#j[!:1&Lntqjb9/Wq9GL~:*');
define('NONCE_SALT', 'A]H3#IB(qE*vOjZP)1+(0P015aj37Xar/LfX965wpY!qA[_7tsxM)[/LH9S67ioV');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = "wp_88rp6m059m_";


/* Add any custom values between this line and the "stop editing" line. */

//define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';