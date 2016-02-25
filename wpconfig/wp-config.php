<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.vxa8rz.0001.euc1.cache.amazonaws.com');
 
define('WP_HOME','http://wordpress-1529108025.eu-central-1.elb.amazonaws.com/');
define('WP_SITEURL','http://wordpress-1529108025.eu-central-1.elb.amazonaws.com/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_k1ng_lu1');

/** MySQL database password */
define('DB_PASSWORD', 'HzDeumny]bIVMtbmYoZcpxOaT,hCfcDLIXayRIqF');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cfhgma1lprmk.eu-central-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '{6a%TXg`[qd;=(t05@!+[T69sI+|8Fapc_JqUYj]]]N.3O3pJ~e]6+~* -#p,}+4');
define('SECURE_AUTH_KEY',  'J-k9%Xnu@p :-Na2]GF?s6AYfD<IsT-OKxEQFD*Gxknn,/ve/~cpDdPZ2S#FI%f)');
define('LOGGED_IN_KEY',    'IOyfWH@.~B4B0o/.Q_8]|HB3eva*xlFV-,5.!U@Af1QN+&P^Dg_M!.jcju?fN&{w');
define('NONCE_KEY',        'q5#;Li.8.iT<7*9xi6Ld[;lcH3J@-#XB-WvwhJ3}{ O{^@>nhirA6Hij,m^`fHG]');
define('AUTH_SALT',        '()gtj2-j5w*q%|g/Hby(VEIdZ:P#-P}3W[.n`sCxrlaqRV~tjA.{?I.2SGO^A|S ');
define('SECURE_AUTH_SALT', 'pb+i+Ufm0/:#@;)G%G,TNdVcEV;^A(~gOIzwWk~5}PyG=>%Dp{s-V-zYTY-d<3)}');
define('LOGGED_IN_SALT',   'Hg+k/l5auZ[Oc8TpexQro)R;x_8LQT;|&:<VU;;kBAGP!xXg;#8qsx<tPyYkN)]J');
define('NONCE_SALT',       'ydrayh{%.|C@r?FI3`<JV) M.!u/([:G<!ZS-.rd99fz20~(q{?aATQG^[o&,=]g');

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
