<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beautifuDBuioo');

/** MySQL database username */
define( 'DB_USER', 'beautifuDBuioo');

/** MySQL database password */
define( 'DB_PASSWORD', 'tAqtcRfOP8');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'xHaX.+e]vB,,QJ}NY,nuBA.QIvYU^[s88:NGssV!>V88vYR@@g}xD##OH]WW_ls99');
define( 'SECURE_AUTH_KEY', 'TeJvvc>!N}}YfIvuB,$JIcGsVV!-d[|S5CooR@wC00dGP++e].ED#TaO--H_PO1e');
define( 'LOGGED_IN_KEY', 'm;#t92eHHtYBnn3$vBB,QX,nj>r77jM0oRR@w1--GN0cc>rkC0|RaDpp1-tDD_PW');
define( 'NONCE_KEY', 'o~p55~KT*ii<uAAjMT**i;<T6HuXBnnQzr7^^NU7jj,$I{{YC|RRskO--o4BoRR');
define( 'AUTH_SALT', '|-GO:hWk:@|zN8:@RGN8sxi6<2.WH6<bLXH+mpD;9]eOD;iSeO_jU<y,uI<>yMBI3');
define( 'SECURE_AUTH_SALT', '@GFzZZK!soC:F0kJQBzkk}@,vN8]pD:5#dOOxhpa1_1-KGKG1hdZVC_pwsZ9|xuaA');
define( 'LOGGED_IN_SALT', '7jXbM{yu.qP62A<aXTPAqmqmT2*+kg0^@^$NJ30}cYFYJzvc$j73^3^$Q7J}cYfM');
define( 'NONCE_SALT', 'eWPDH*.x+qtimx+ptimae69;2#]*.591#]~_adSWKODHSWKODG59w-pthlZdhlaeS');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
