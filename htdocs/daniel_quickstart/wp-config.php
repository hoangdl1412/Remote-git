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
define('DB_NAME', 'daniel_quickstart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(gr>A7~)2-)DvSf{.yL}WL9#sLQxJaF+Xj@$-#Ax+)l?2@.xdstT-!99Fc=v5rt ');
define('SECURE_AUTH_KEY',  '7(E X#itjQTxr9IuQ-+LCF8kq=}`{BP<g(.$[sZhitd0{d$>wd$x.sX]gd8<G2)A');
define('LOGGED_IN_KEY',    'q57<($#9I$z&{ZTe>L/tYRjy/-H&$kx{NtdsmL2UL#MQCe `Gn~}zm:a2:H.BIR0');
define('NONCE_KEY',        'QRz;te/)^OS_DVD{:RzDV38=_]e&oa*+38zgdGR  X]k,Ep&I?6M6(V&zGt#F_BC');
define('AUTH_SALT',        'KHc~5<J8/W&8Ow=nsN~ukpjY?B{rYG3%>V)>by?M*x E3s^mrq6vce~^Yy(=`vaD');
define('SECURE_AUTH_SALT', 'VC7CM9LQ8h5;eM!Xwao]7xt{5%~,83sbugeSQ|Pq44@&k|<];%Pat]Zibcw^9kwZ');
define('LOGGED_IN_SALT',   'sb*hZghBU8}SkO^8:jqV[1LN|hO<0PBINNGPXn4k$dHRaZAo3n@j*?r^&i]rC*`i');
define('NONCE_SALT',       '8##Y[`k[=A/$Qu#{0 C5-j#?pwgm52`~zk[UOk#3{ol1F0PJJa#?9y3kavEXoi}~');

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
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
