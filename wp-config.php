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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'projectdb');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'projectdb');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'password');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y(n4~H/.;p0eAxx];Jt[7o0sQm:bowC;:1|*m;iMp{]L0w-yd ?+C)D~hm*`a.sE');
define('SECURE_AUTH_KEY',  '[daiE20M|wmK0xzYuV8-+P n3&y&Jzd-o>o<eq3;gIUXhHzC](O2wb3,)aTS=Aj~');
define('LOGGED_IN_KEY',    'nAHq{0xM]f;[*Z~7OYv5LNu+6T/TFryh3/kzsqFWaT/uxyn&#d:2-W9n2OP3r/bm');
define('NONCE_KEY',        ' 2/pMOE/N!#0N`SY<0b :s@yGyc&t0y8B2=8f}jfXD4qZ:1/@>-W%`&tv!UNKD_f');
define('AUTH_SALT',        'eWZ<%nuH.))W!7zuR#i+-V;P;6/8sFK*u`|FebU@b]vr[Ug(:CA#3*E:b7-o86Q~');
define('SECURE_AUTH_SALT', '0i_FF V$o(vYheO8d/[&`P|l)6*4E6x5jFm};@oJGt6q;Qj-FSXK&48Dus<*bUig');
define('LOGGED_IN_SALT',   '=%y=|{#.Lh%D;ebiI-Yjt8&RI-Y=L+;pn^Z4B1z6o0Sj3tz->l2?.(wkVNAv[0Lf');
define('NONCE_SALT',       'l+$&zj3n3gZWp9snJ[QX+6+W+r>hvs.4_xi4.,!P^%[s_1OtFKBY_y%Vdu}A-qg5');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
