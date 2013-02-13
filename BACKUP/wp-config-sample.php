<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'dho522');

/** MySQL database password */
define('DB_PASSWORD', 'dragonball8');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         'I9i#Y<}ZpG5KW{,qefxkIV#xBxU=#(`jSZ^+)`69bzXb~xQ0)FSBC<:Jv]i)3&DN');
define('SECURE_AUTH_KEY',  '({)fF/]LPKHc~8BbTwB!C3|x@g,gc_2;)X5*]Jao-M00@!u/}Y7kA0sJ-B-3V-]|');
define('LOGGED_IN_KEY',    ';qbMO<K3-JUYe+OV+H_Hs&@N)23=Yb+Z / .!iuP*?0PG8CNE,,$9~mY;~jn<QF@');
define('NONCE_KEY',        '{_]@FbUD#P+6;vTYsL>T`jfDbXNvSsCr!e7|O6[;i2]4Km]iEhlR{a_{)UWpS|SC');
define('AUTH_SALT',        '5H8 Kc-X(E5q&ZgV$e0Ee-ptrI-x:G9WaP<KiQtOr7JzWV#YB/Ya(@&hid1imeDI');
define('SECURE_AUTH_SALT', '9*t[-jryK<brpIdM]0l4k[FM:)J|pDoZ|78}|I4y$OpRLSysRU#WM_C(RC@k!+A:');
define('LOGGED_IN_SALT',   'f3/lwi${YR)]+,uW/-8=4=GIU<KX6dW25*_|qIjYI-{gyZU&S?-V*Pw=$<9)+q/|');
define('NONCE_SALT',       'Aj1Fu*MLl;]*-^<T)AE9mFeP>##=9`(M-YrdgnL5,Q4lLsv0*NKEq;4(d]W+D#w3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
