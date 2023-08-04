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
define( 'DB_NAME', 'news' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'N}%xqLAH<0gql[)4 B~iDD9Oghx,463;X}45Z;6Q?C#$ohTg23lnU.hBu_SU+pV&' );
define( 'SECURE_AUTH_KEY',  'si{0F@ulqg*c]-/B>v@].:H_(zm 5ZVQZcDfVRFqhdiUmQMbP{Hbq57*/$PB6F,/' );
define( 'LOGGED_IN_KEY',    '-ZemYF~M/[d#UU1b8#V,5m:+Em1,!-OGqB-72W,y?QI&.Qwpt=^K$ awM}-FAaAu' );
define( 'NONCE_KEY',        '^4l&:z_8I`}!?iMBuE[/wTG[W#K3maXk{cdjb(xg,i7#hm|O5300xSC&s@5)|[|K' );
define( 'AUTH_SALT',        '5}Mg8MIG#A!|)x_6g{~*Y-OM5bDh6_MD%5cvrwmhXKx qV%97$>GZG/uT0NZpmp,' );
define( 'SECURE_AUTH_SALT', 'cl`7(y4_F?K^Z%hCz5B,t){:@V&!(JuMdeuqL9aea.2f_X%YNgU5gpg+@zm;=]n6' );
define( 'LOGGED_IN_SALT',   'JO(kr9?$ybSlIDR43.|vFs$(qx7X8ZHHCd,s&GKm2YoAWw^p;[[_VJJv;_scyD9|' );
define( 'NONCE_SALT',       'q#X e46jApS#MK~eZ@;U#@TS{P1w29%vp@X)vG}V{H]PBI$4=n,i +KUeC&3g_ka' );

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
