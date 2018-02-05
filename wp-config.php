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

define('WPLANG', 'es_ES');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'LuchO');

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
define('AUTH_KEY',         '<AZGb7Um@8nsM2Q_=0E3jE|)x[,=#=VN2< gbk:Qht>]9wCbA1`EFaM;=9A4`kRh');
define('SECURE_AUTH_KEY',  'cNKM #3?l9St/K9P80m2]6{23_}UAVZoYgs#FN@Kx$.2_ s8]BD`d@1Z04`8FAm9');
define('LOGGED_IN_KEY',    'jD]Xfjj~Is^4.>+~:M_Ip[`hJW]L6w,i92{x#b0s4So@V7>&%`!A&WRtE$XIVkx$');
define('NONCE_KEY',        '$J55, m6O*@A7&KY1CrRl!$x<)KXIUON}*QC5&b>Ucr$@N2K:i ;d)aIH](j8wQL');
define('AUTH_SALT',        '|*0(:>7,7-XHx55dgo!yq|b4@ZJX|_6~z(jyJ$bHtV|hT1pF=4`Hpt*c-OvgvD+Q');
define('SECURE_AUTH_SALT', '([&S-Uf:4v04L&zp$J:M~m29A)y#CkfkQr|Tn.0u6^,N!y!?cV}F :r/6l,SUC#)');
define('LOGGED_IN_SALT',   ')*&}X|AWI|mnSd{B77Ks2IS>DI4zk#7>38A(<tL-I-c|)-oo/)D<VusEj@`?&EbP');
define('NONCE_SALT',       '@<SNiKs4Z&Vf6 jh6C<O-J2.=dDjtwS|QPK0IlN_Zc$ouDu,k^kHR*22Iy17VgA_');

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
