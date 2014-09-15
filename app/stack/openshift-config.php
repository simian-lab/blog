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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'adminrGJMSlf');

/** MySQL database password */
define('DB_PASSWORD', 'lxnYcbih5-2K');

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
define('AUTH_KEY',         'K`R-gf7Pfeto+OwQkp(TAD/P^QJ7M,Y[aZ+TxxXzs(&qZ62UUo8{{0%fr_gTDNXA');
define('SECURE_AUTH_KEY',  '#ekd%t{a|lJdWymfP;iq6,W}1JeJX+1h{$)DaFHDC;E+yEhad<G!NMO|~fMjei]K');
define('LOGGED_IN_KEY',    '.k_+)Pvf9C&<50X?2|@}Af&JNfBF|UVpF0[:S46y|+!Yi6Ga,S.]jv<1z&yNf;-f');
define('NONCE_KEY',        'g1S-MI!|UY.=*+JdU@4EiZ0G(o-,r-F#1>nj`T?5Y9$rv`MNWf<}ZNw=-HSl7#_M');
define('AUTH_SALT',        '7nSe@Wpd8vA*oIM6J-#r4@i<-tC?fRA7p+<$pMLCt_B8t{>hav^a&elIH6,`a}su');
define('SECURE_AUTH_SALT', ']z=_[W1+H4LByItkrOUX |%ZP(M5]iKcY-X8~D<+v#L5D|v/-^oEWur_9*C-Ei|*');
define('LOGGED_IN_SALT',   'o&bc_`@~Wtr@]:C9Po]Xjw%o50Lv%+ab|W;#-OER<0SR}?-eW+?YWVtjAl/eIL@e');
define('NONCE_SALT',       '@vmD/J?k0j+_$WSqOMg$~pTN$k|IH?-)Cje@GU#0gkgl5f1/W.3k8Q-^2E3jw-Jf');

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
define('WPLANG', 'es_ES');

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
