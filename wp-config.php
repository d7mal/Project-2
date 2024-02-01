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
define( 'DB_NAME', 'u363840102_9xf5K' );

/** Database username */
define( 'DB_USER', 'u363840102_OlF4j' );

/** Database password */
define( 'DB_PASSWORD', 'f7TTnoIZdp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'd.b%$%7blfj}2A#m* dz7tp60eV)~bzI[C$=eH71]xTK@4 n!I`BFZ/e}zJXC98<' );
define( 'SECURE_AUTH_KEY',   '/A=IwQ;!$]azy%ZbfWMCTGtd^=5gpT#sAq!BQMJO2?Pwz=NL~/Zk15!ob%CJ9=o?' );
define( 'LOGGED_IN_KEY',     '}CUn?x2PK#nq>QkyW5u06T=m{=1]zW04yU`6[~0pqPn27BC_MTg7k,Aj*Ro$@l92' );
define( 'NONCE_KEY',         '/FFPjn<v.j$t^(Tgh}^AoLX)XBLle;6Ny[^=51nh6.yS2BM<{/{po4m*#Rvpa`4:' );
define( 'AUTH_SALT',         'dN!NQ$| os;YZaI+tK-be!4EJiva8.@12Iw ?.{>>6X_Rp8H80`SIu:A*8}jm65S' );
define( 'SECURE_AUTH_SALT',  'w,cKd=tnlmWnQjl|pDJ_%Ez 2{Gr_>a]zu{:0V-=.VVhPswkYbed.;KCh9wU/G 3' );
define( 'LOGGED_IN_SALT',    '7@@@l`O7jn4/=$V~=>Ww85qn=)Oh,k(+B*0f^UEb|FDbrR`;]xJ>4<V+|9*0S(J2' );
define( 'NONCE_SALT',        '#&/=47{8&k_37_$Jq1PvPB=/hW2b~.9x}#@<1hyWTL=[^GpvdF5+@a1q`LWHzDpm' );
define( 'WP_CACHE_KEY_SALT', 'J%Sv{|W}^*f0PM5XV:[uy3*_vXM-X+rWQ#t8VIJL9j;bV)Lw#>bZ WHl >{J-ckH' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
