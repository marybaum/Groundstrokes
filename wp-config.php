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
define('DB_NAME', 'sandboxkDBxjujr');

/** MySQL database username */
define('DB_USER', 'sandboxkDBxjujr');

/** MySQL database password */
define('DB_PASSWORD', 'R1AFNTb06E');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'l9WDP5~]ZGN4!4C[w!o>v!kRcsZkN4FS5G:w!5_o-h!o-hNhsZG:8nUBM3M3B>v^E');
define('SECURE_AUTH_KEY',  'cUF>3M0B,r$L;A.q+{x.mTa+ipWeLamP6D]2E<3*iu<q$fMTubiPXETfI6.{aGO5');
define('LOGGED_IN_KEY',    'u6.qyey*mTbIPbEQ3^<BIy,n<3$jqXfubnQ7Et+iOWDSeH;5_]K;9#p-]x~ltaiu');
define('NONCE_KEY',        'A6.6E{u*m<;+eqXmxbHP6EQ3E<u$7,nyb$.qyfITmQbE{3hpW9K:HS5_]x~9_:-d');
define('AUTH_SALT',        'FgQ7^}I7,ry{y^nUb]2*mtaq+eLW9aiOWD#2H;5_px.{yemTiuXEL2AaHP6*]A<2');
define('SECURE_AUTH_SALT', 'qu^nTbIiqXEM2MTA.y,}yfnUnvcjQ3FbIQ7E{BM3$>rmybIP6EXAM7.EM2+<u.');
define('LOGGED_IN_SALT',   'umTbnQbI{7M3B<$3E<u$jq.qyfIT~ltahOepS9H;OWDK1-#9_;xdlxemTaHXiL2A');
define('NONCE_SALT',       'QnU7I}FQ3^>v7^{ybn$jrYfMEQ3^<u$y,nTb$.qXfMbmQ6E{3F>3^jv,rzfnUr$');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
