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
define( 'AUTH_KEY',          'R]5bXZQ*<g_!MkNIt Eui[6a]ZWFi-qdl5-;Pup.0.d%F[_f~K!WUD*odmFN$>TY' );
define( 'SECURE_AUTH_KEY',   's%KS{BS`dDTW=bgS7*0?IXP51FF(A8QZ9:eaK9]cH3HbUmKHZSaCHT$,s,yD=.q;' );
define( 'LOGGED_IN_KEY',     '^3Z$SnJBTsxT Z2]{wm,/q3H|r>M#[Y7=B}uV i44.8})U2QH(AU.L3=<LV[r=xl' );
define( 'NONCE_KEY',         '{c^C6cK@C?1T2Sksu)DFt#iq ,IWGh^{9kvBtlZ!i%*YFltKq+3$J!Z^4iG-K}iC' );
define( 'AUTH_SALT',         'i{OtgRC$B/M{H8a9~@6L_7,z@mp`5tdPNYkW[@+UHg8gWN5cF89fM|%$zL^xpwLb' );
define( 'SECURE_AUTH_SALT',  '&G!~tvc/*or6{dD5K<Ud&ta42(71_I6LrbW^579eF0PhR6V)[Ja&kceca[/pv/Bk' );
define( 'LOGGED_IN_SALT',    'ZW%(z9Y?V1FSQ=oXb<=Q<x*%,.P6|#2`0NS_$%[20O5P}4p|B>y#CV);(`1s=xR4' );
define( 'NONCE_SALT',        'ZrY-T/c8:hBVD,#{W2nt#3NXi[pH==}P|:AmL<.B2`ZF5ncDA0bN3SquxMn^goN}' );
define( 'WP_CACHE_KEY_SALT', 'NY;8mxc!J9Yt2e0q[[$&O]x$SJqQ(P#})}$W:?c),*=4,fXzk0/W@z*{?uL#<1<<' );


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
