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
define('DB_NAME', 'fresher');

/** MySQL database username */
define('DB_USER', 'fresher');

/** MySQL database password */
define('DB_PASSWORD', 'khongcomk');

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
define('AUTH_KEY',         'U^Q4{A/S9rxFg&#pWtc1GpjHO5=%b#/W!T2Jw:-(H5H5u)#p?QEU1BWlV>n{is=$');
define('SECURE_AUTH_KEY',  '6r;jm+K66jdS eT*FymQyL7;>,qQk3]A{@>TMD,J+$_i_70ACjr2[`X}#[tR!R>f');
define('LOGGED_IN_KEY',    '#H9-MKkX] {)y$RWTK;50N`p XcOYC&bQ&E@cP`8aL.`b1+/RJAm+jb=a+.iR*>v');
define('NONCE_KEY',        'Lr=(j<ccdTN&,ifw)9`WogRnH?A?0S,w-;dsaB6-%5-,&,,&IY,wriM4%KwjJZEk');
define('AUTH_SALT',        '(c/p^kq-6,~z#.@C=%$OO45eWWfJo.j6u@[,Qn|_nUO a?,o<vbUIoVp!u5f+pQ&');
define('SECURE_AUTH_SALT', '?1IM9>Hd,i%<<:*hIg)`YtBExTM(l(4C9o74!C>]],nf[:.CVR*0>z~0_Yyz#E@b');
define('LOGGED_IN_SALT',   'B%@uP%Ujg$KK1T{Gwn4[?:RmBy*#_.UQcE/4x4rmK=|q$ XI_obhXrNfz-$uvUG)');
define('NONCE_SALT',       's#+oWGBFQ=5`6K[,bp7bp-ZBZ j|#;<P79i$+@gO)*7@mQc${}p8t4Ui3[(oYYo]');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
