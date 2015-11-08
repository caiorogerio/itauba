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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '.Z$YG5X%B$7*aA<s{m@Z?$!q|%Ae0:H@3AmL*`b{oT161.(p7OTQ_8)1=s-;500L');
define('SECURE_AUTH_KEY',  'JsGsr+RN|5AN2e*hjE|wKu|~d#8^^$Fo,h=1Qe?|h|;h=rpQ3T<$qXzd~N+t;7b)');
define('LOGGED_IN_KEY',    'q;z<F,kd379rIEe|+NRpWSpG##vxp,a8(1+wkShC8S#.6(O*(^cFx[MufeU4TG%Z');
define('NONCE_KEY',        '[n#t%L[XX|t$)k!+N3m_(:ep(hnEeH8kxf?3a:2>)^T0)#/4Mc=RliMgrAU[p_b!');
define('AUTH_SALT',        'EA:HFY$7f{EGP?<h^XI<T|HDoc[Wp+?4o1kC~ObSpU])DEuajeR(W!^sJ8Fq!IWn');
define('SECURE_AUTH_SALT', ']Z0g+EXAW1!P!`l*rbD&fN>tiC]lU^ua3p&* *It2ojQ$D5 S/{xn-`<KMFaUT#M');
define('LOGGED_IN_SALT',   'c#!Q>-X%A4-9J=p6t0}q;4m4(z9f{]&<iT*I<;^t( Ogzq5U-V5]xvZ~hE!+^[!Y');
define('NONCE_SALT',       '5j~Tcg;rdXB<bho|x%=8yo6uoDUWs*gvJ/!loQ!qn:!@I#wPVLc< K>qZPIA: :>');

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
