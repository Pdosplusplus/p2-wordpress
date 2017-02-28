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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', '11');

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
define('AUTH_KEY',         'CuI[cI,)I)+;yrVB^S;P=-1cufFg#LZ)MRHVg#Oy-Zi5/2qsE>H/k8ha1&[mcB4!');
define('SECURE_AUTH_KEY',  'Uf:oOjaoIz3xW}EW^)gBAyuXGiPKvIzx-3EP4nx|ZUy[<caTup:o6[7)Jd>VlO8>');
define('LOGGED_IN_KEY',    'yYMl]Cz>uTu1hIN|2CWf<]m1Ige6,Hj<1${sZ!urh8OH/iGfGOALGhI[vB+Q6+o ');
define('NONCE_KEY',        '_C>7u9jL.]/s<Fs~U|ux60;jW8xFpkT;5&MnL3A<c#7z}Y=rYp5d34 ^XBs*A137');
define('AUTH_SALT',        '_&M3TH|K]C4_`lFbRY,4gbl75(_]Wli[zYE+@J]BvB7cBm~;d*V^@qCQ@5$P2wj&');
define('SECURE_AUTH_SALT', 'saE6(1pt@ON8+4<7;q54!0k*^WVf@nQ@^fGn/ ovX5L`,2QUDPETM`QU>XY=Bu@|');
define('LOGGED_IN_SALT',   'pa|NXl+;gd[9Bx]}FI:[&TjktET_=}y4yYE!p^.mP^P?h: I&Odw+qW;M_,}$!wy');
define('NONCE_SALT',       'F7Cvy@]eAC-5W6Am6}4LgiY M{l:?{3.b!z>3ULtRPbnmBc kZHK|U}Ul)HI.aHn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_geekos';

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
