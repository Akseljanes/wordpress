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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'MuBNBc8AnbYZpVen');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']@:?6N(*e-6hF{$!-rU9P|*8KW`ZsUe;4-/]eS}*r61VOBW1r1}S{Q ?SJ;xd;/G');
define('SECURE_AUTH_KEY',  ')K?0nZIs2b}R+|a|JW{JCU.^UH GARgO77[6Zr|?K=tjp<LTv6j0l,%&/{IRN9DZ');
define('LOGGED_IN_KEY',    '/o[M.4]]+YM-}f#oyv}!+BAc$+b0P^2%cVjX8xly&8{*1?Xweu}@5dIsf!}jjdxO');
define('NONCE_KEY',        '-5Yhmyt|P*MG[%/JY$IjtSC9K#wL@H!b*U]-PoiL-q_8A3I{4$3.Pok]vwCiTGx?');
define('AUTH_SALT',        'qa(g[8mS2EX)LoWy_H6KkDvd6d}I`mwuHXKq,?JO,[xJ60)r*?+!6{~L@3H%@E+_');
define('SECURE_AUTH_SALT', 'mC|*gi|@mT Ci`w_ !m@+Oh;-$zWOCXqY<*GS#V+)x=(~gMVPYT4e&Y~jJS>!2+|');
define('LOGGED_IN_SALT',   'EG-ftj6XL[{059R<yE-<@jO(g@E$]YuoM$_>9.ptet@P)cj+S|2cv9h/CcX_#?tk');
define('NONCE_SALT',       '`;@xL#TQ_0#`R]o$pW+_>yzoxyxLDPP$$Bb@fIaM6?x9!AZm@u}c)*zcxj[G7#+i');

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
