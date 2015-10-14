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
define('DB_NAME', 'babylifehacks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1^3~y;>y9$t1&#u**ruF#QHld/A2i#F?Q+:{n`Um?62crbr_+d^|kP#4L1f}-S49');
define('SECURE_AUTH_KEY',  'WVdw>|9hBGq<h^w;D!-kpG/@RUG|p01>UWn#$V&D^kJob92y5|-|SL.g?n9=d2/]');
define('LOGGED_IN_KEY',    '* lPbe1vY4oo<PyW=pOR3Aw?.1}ptst`E]^.2}7Ey%+/2<:|||U$qXfi}&F69|_X');
define('NONCE_KEY',        ']6B$+4_#k~4twSkR|<L&>`?69<X9~hr >.B<U,fOIo]%+}0zQ6_GN/d|NgED,b)w');
define('AUTH_SALT',        'Yf1G)05p{M~-wU*|{>FTelB|LtU}]0R1^/G(g`;z(-B;j Mtw -q>g9PVV~veT~T');
define('SECURE_AUTH_SALT', '?c{?O|rz7C9&Fi=1_>,NQ@ph-|T?PEba|A*-FIcC8=oE&:|k|BD`S.I=QqU;3Bdg');
define('LOGGED_IN_SALT',   'In=T!YD rt|S50P@]n@!t2#,%3v|uyt)$mT*-GZb$/}AtX|h$U@+Sd@`HX*U/8nx');
define('NONCE_SALT',       'GD=-tpc?.8Gf8w$6ei.7E#-PQ<NnyseF:Rx/O/#Al#IdE+S ^+??9~D.%M-u6yIt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blh_';

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
