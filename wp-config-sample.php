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
define('DB_NAME', 'mysql:host='.gethostbyname('mysql'));

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         'Ji|Ya$OX^g<T ~IA]Abqwu4m6Zs)u,oI<XNioWU,6CH5edhfSk{PVT8[2j/Ql>|u');
define('SECURE_AUTH_KEY',  'T:~N[uI]I#AyCC,ul^(X+_:+6Q&}{89!Lu$3mLAMesu&+vKyws$WDzgZ.HM+<prb');
define('LOGGED_IN_KEY',    'a2Dc}Zi&i7zZbr]IhCoC`YH<D}Tt}sMoI.o~+k`LTX6E^~2]-OJ28g(-u~W2+Im3');
define('NONCE_KEY',        '<*=HZPQ|1x{nhJ,f6T~+Xl*CWT@nPp8#v:.T2eZwPVw;Q,/YTtex%`_zGv!-~kmN');
define('AUTH_SALT',        'q_8^Rw1E=[?apm=rJWWc4x?lh(Kq[9ZhnG#P]dtl>OtdEBlq_Fgj3z|yGs~;s*!~');
define('SECURE_AUTH_SALT', '5u# w:h?i: o{q-D5e|-A<}CK,s2oBss|-&/gMhvIAL@YwtPqtILB0D/o*,+OZ;{');
define('LOGGED_IN_SALT',   '/TgK75QegHBNJbooJK@jNTrk%m4j;3}fR?$0yv@?D!;k|5koi;zSH=k`1WQ7^vaE');
define('NONCE_SALT',       'I73mP~,V(0zWkcT8!wHR1n@|;Ai@1:ZR@>d<+bJ$ZX<#e9<Q9KfDeKU5SJN74>yI');

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
