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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', '192.168.168.168');

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
define('AUTH_KEY',         'Mw~m-t%WEvoYxDR0&3}v|x.z4~2Hj&hxK>`a^L#=&5k1q{x?%Rb{H^(TI<<qnm#3');
define('SECURE_AUTH_KEY',  'XaxY+&^sm~x==DV&`+wm [y<^4+VbmwMitC$hW_Iuz)FXtnt-[ |5jJ<Mka{ShZ/');
define('LOGGED_IN_KEY',    ')2l:IO.T)tbw^/+TaB<8e_6.K*yzd-||[tN-++~F|A01gk3|YsmX);iPz:=!>GGu');
define('NONCE_KEY',        'IB([|4u(d&W<E|,GFo4A~O6gYeeoO:P7l;P3Hu{QO}RFp$G*a|0Z?Ma)]a)7LvX|');
define('AUTH_SALT',        'K$L@. CsoB}<JN?/WB2)k|[!-UN I52RwmtgiwSj7y+oosk{{-:WoVRA<;>)b,|2');
define('SECURE_AUTH_SALT', 'k4uN|IOAM4(c|nBm6m8:d*) _oLB;O(8[E |1M+Q*_|a7^s4b:eSh#h$CI9G40pj');
define('LOGGED_IN_SALT',   'Te$0X|LQ6N=KYel$0?>qCib5!{[U8E*<6$|nlZdNUf&j+nL}@~m~Ikhtm+Hs1i;C');
define('NONCE_SALT',       '>q|@Xr)7|AMy)pK5$> QzB5hhu=tBe;A%WJl%ty{Vc)%mm^Y,ii~/BCHmZGyec|U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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
