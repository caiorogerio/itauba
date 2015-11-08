<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'TlrOrFsj2wjw3KXbL`P{/J-LA~lsS8`aX-l5o3mGrnz@<VLJze[47Q@fSu&u+Jp)');
define('SECURE_AUTH_KEY',  '+)3Mvf9L2KfT:{yzK;[6`?ZKu=RwDk]D%^@ nryUR{vl-;Z#t$<L;0;/+72)(L@~');
define('LOGGED_IN_KEY',    '(^yLB)ciqF}Ro.;>iOwW;-sFs4e;<0h%8ZLZ,w:_Q;lw-<iAd1>:T/A2cUFy#U@A');
define('NONCE_KEY',        'U-N[c+T!Mn6Zw<p in[)O{.Dg$(Yj%);9#V|8~AC<}:Qz.:8u;jF5(dtZx=f*}P^');
define('AUTH_SALT',        '5m=zgh$l;jxCUgliZK%&<$%1x,?@U[x9+wteG_=%H8erJVR[ZTzKXX@d~H*68b-b');
define('SECURE_AUTH_SALT', 'YC.z?hrykD~r`bN{|NTJm#HsD[tshdrco(CcQ)4/.?AaI}CpFyg>hegw.qw&yk`0');
define('LOGGED_IN_SALT',   'bw-29@4sRtTD*]ZlzFy@z72L2+$CXY<@S7Ld{Q~,_22C%]!cFU_:jBt,LmS# fnP');
define('NONCE_SALT',       'Si<qVyYW.~5bbuz8@t][Nu!(0Ug2tZc|s!4Soqg84QT<3vXaqx,%6)k?M+c:(ELt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
