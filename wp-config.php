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
define('DB_NAME', 'sskwedding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'M1<h431_Nu93n7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IezRy}U~qEy,v)^c`o*AW#OQlYrKsmQ,y|U.mHX-m2i87vCu?B.O1,#_FbN)i-<n');
define('SECURE_AUTH_KEY',  'm`[<i=6Bsj|div+oqu{P[jb6el^:_.+5gC.G`uiGQjWxq&eaZJ,}?v0FcYD+}dA=');
define('LOGGED_IN_KEY',    '1d1g[73i9nhIj]6dZ=@F|n}PAb07we{MG?*`ST7v*Ux6XM7h2h^dBQj`|~mp)+;m');
define('NONCE_KEY',        '9ANgY5`C:)M$KhFWx_We>o3NG#0cg5$zD)P|Z.iURK?hCr>oo^oB3Dbf}iW!*Gaa');
define('AUTH_SALT',        'CdOs)7j4g9W|9 ;DgSEH)z]k#y+|u_)$FL(6GvJC0/bFjm$9(w%no:FYLN(L4=C0');
define('SECURE_AUTH_SALT', 'NdQ}5lLks[1Rv,UT8( ex>o?KT?|D/tD/7m+g~&*lXI9-wWp?p2H,3JfCx)`40o>');
define('LOGGED_IN_SALT',   '].&M2^-,L4`GA2;OcK*P^:nA7x09=zg?>Q!RE:[MJmNf3z0[O{MNlV#7qV*V+.xb');
define('NONCE_SALT',       'tdY10?b$y}0-P!_(!vq_C}9<Wvf%$K;M+cBzb!)e:~9xgtiWe>/D]b-SBS^c~8:b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');