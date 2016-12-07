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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '170595iz');

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
define('AUTH_KEY',         '1npuvG{p>6*lJ>r6^=:|}j]h`1Tb;oW|$2S@umGL*}&vV<sG~dR97~oPS0J`bs.1');
define('SECURE_AUTH_KEY',  '~!1S~*`0k:rsn t^DQ^vkYOTY*+03wYl(<G_+K:-+-7<F8u2x{9kH6=+Pc!nLY]@');
define('LOGGED_IN_KEY',    '>8:9ZObkQ`2$ZmEf>PO>9yNk-)B;69EWZW#P3<e0;e+5(#P:%A@sPU@8{a(@M8Ns');
define('NONCE_KEY',        '/>R[f ?mZnzGX0/vGqsSUY>!Qk`1i)t)qZzA2Z$ZfuQyjRoP2h`g_-TV-?&{PT/g');
define('AUTH_SALT',        'KxG65QIrJMVHimG4h},lHd`O9:;*(WP]7RW[<YgD9)=u(f;$EQ$u2hh&}t+[U==g');
define('SECURE_AUTH_SALT', '[#^3?,0@3z_,C,=up(K|O:d83Nn_p8E,6$pGz>Zwx5T0h|U@ca]xeaJ!2;7FR]Rc');
define('LOGGED_IN_SALT',   '=V}=tui|Jp]%9xY(ypNE#E/tX[?AwLT WV:qf>xuebv@V7`)pMv7VgYO`x44w76K');
define('NONCE_SALT',       ':U-wu-a8VOb+YR)MHso>|*a&t{hID$kaDwPE0 s T~1ircK1U*3>16/cWzpHCvS.');

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
