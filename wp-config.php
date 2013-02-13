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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'W^ =|zvG7F*4tK,Fsuz4cBbmY@)t.&2rD~>J4i#DZjE(4Gc(~*V#u4d^4:KL4t;B');
define('SECURE_AUTH_KEY',  '3RqZE9TX }m1c|Y~PT|h-?6Pk74^s(wN<IP;/@G^bKCsSc|G3Ny0tfC.!RVmz.xJ');
define('LOGGED_IN_KEY',    'Expdab![.+58k&RP<5@GHiG-O_CR$<ah%|s{cW;<7NDRpXR-Ur|5IeRN#v|.s%5,');
define('NONCE_KEY',        'S^y9W:VE6tu^*_aR.++ol59J*S4;y#+PW^<WDNppA|@:dWy<vM|j<|SE6-Lkf;f8');
define('AUTH_SALT',        'GxQjsc:1D3k#50I}]D~Nzv`[+HTWa&8}o39KmXJ@?NKXE$G])#}ofIBSqf+LDb@a');
define('SECURE_AUTH_SALT', 'D4c|$6zZ;_@Ic~U[8[>HcbcR6v= _wD9yv/ytF`UZSo&Y#}6K)a3/[X^Rg_Y:XBZ');
define('LOGGED_IN_SALT',   '.$5-N-p/;S4_W#K?#)g7cEV8,h@8UAR:Fw;mNTid<4<F,y8^&6|>R%@HYIsU]5IZ');
define('NONCE_SALT',       'Z+eH-){PqlO}dUs`$Ac}d:F;>Eh,^wJvy`9-~V<2[!iomv#xPl>7+C$Y)E0-m.Xh');

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
