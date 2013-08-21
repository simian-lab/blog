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
define('DB_NAME', 'simian_blog');

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
define('AUTH_KEY',         'E(l^~%4lKx)O##](h?xLa-<Nc6k).PB>FcIhAI&:fB+G{6$-11|F[78+jK%a{OTH');
define('SECURE_AUTH_KEY',  ')@@+x[<#(!@V$k62Mu4lHR+V,rlnlp]37(mq$jtKNo*{ZrlyaEL$nvgw`GSB~hOp');
define('LOGGED_IN_KEY',    '&^q3P.P-+6iX>kj%<Y8Z2$W5R4A?6v0ROV_M?MHp(-C#!~2u7T&>4(J_+ Ahf37A');
define('NONCE_KEY',        ',uhat:R&gokG)+bh#gcSVyE`h=hJd&lr+mc+bbgIiP!&9zNti#NZW|e~qyGO`JFG');
define('AUTH_SALT',        'NFvKI/VbV^AllV@1IQ|-uM~nD<9` :#J3u*r2 7O$uEP+xMI~NW)j!d|o0NiSs+u');
define('SECURE_AUTH_SALT', 'M|+5SuP|?+MV$dxWlEww3(ys%vlV!K4=_3}HJAUDkc!V<YM[n5,G(07B>(P3X?3{');
define('LOGGED_IN_SALT',   'OYAw+^%J rP1[Ev.f&dVC:#|(7j*[C~ y|Xe-Sh`7#6:W+PaMn>K~@( *K9E6R$W');
define('NONCE_SALT',       'hcA1Pjm3$|C{qbhbuP[/rr+}NA3w$O?k2Utqe-b{U7 pUeBU6yplh#pga_`{!n4E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sb_';

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
