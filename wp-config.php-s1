<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define('WP_CACHE', true); // Added by WP Rocket
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
define('WP_POST_REVISIONS', 3);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'optikald_pandia' );
define( 'DB_NAME', 'phadmin_wp' );

/** MySQL database username */
define( 'DB_USER', 'phadmin_wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lDgkFn6ThOFm' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Rjmg]-oTOT(t0jKt,qZk[O|I)ouFDx0j>H07UNIb06{dnz_k[-c6$(1V/<= [Ngk' );
define( 'SECURE_AUTH_KEY',  'OlY?O$~&l@Wh! IP-QN!*dU|mTa!lc]b_|jFS<#L+L t_xwZ$9~la[Fyvx)9}&XR' );
define( 'LOGGED_IN_KEY',    'WjF;JbvPkg%!D01XqV@nfyqQinSsP:YrG@E|&*+wIMBYSLFXY5d8e=32]eQ92Xab' );
define( 'NONCE_KEY',        'x^FJa)a<k<02>y;Dxp[^4L^Es&~1&?&S:V%?f,;/XB]IW@xWI%7kqgVov6n?/^1>' );
define( 'AUTH_SALT',        '^9 +qX_;J5w.%AL(H}DBZ*XSwJEe3Ldw3qI)(.lhN#%>N21SI<{?x](@[.?nTk(p' );
define( 'SECURE_AUTH_SALT', 'uml!A<4#0~Y{YK:x@9r1b_bGT]IClP]hR>o6nvc$N|boNyIX(,Krh;`)9(L8`boW' );
define( 'LOGGED_IN_SALT',   'js!I>+(iM78n6r<lQC${r?ns{bxe{pvh>$uV?F)Ypzw#b`O9)Gv-[&@#<4,.qsQD' );
define( 'NONCE_SALT',       'nA+F@guLJhpL>)dyViM(b?>6Q0TN];t47{#yR,xx!lSO~*EELJ9hO7w&A_hsoN|_' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
