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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hawkd');

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
define('AUTH_KEY',         'DiD}aAyE1n6&alL%yk%[P1`0I&Md_A4I*ZOBEoo`n`>^ |JJCx+y[&--4`WRI= 6');
define('SECURE_AUTH_KEY',  'O6E1>fxdu,a0Bz}4%Os(2]YA4Ng.x:::cs;b:beS(*JZ(4s3N3^T&,I*c}AO~z|K');
define('LOGGED_IN_KEY',    'cB7jv`sJS2VyRoU^W(rfFr`Ft:pSM+.7!hO`.88[%fF7[S2V Lr+:UsxP;Npd?|x');
define('NONCE_KEY',        'A`LHv5x?+>Yyx*%-MQJjz5(=;?0-Q|aR:P;qgDIjde<IBl/m|uOJt:Tc9s3CRnJv');
define('AUTH_SALT',        'T8ni1):6JGlu O.C+v0-#c<6p+v8*vL;./3>(Scn&ws2zZ1,|f<?dGAbZjr-V%.J');
define('SECURE_AUTH_SALT', 'a`u3vJ)?b!%-!@~io$Kj:|6}8Y+>cMAjgYiu!Epy}yY!lJn;B}S&G{F_{iFM=o%L');
define('LOGGED_IN_SALT',   'T`Yub%Pewo-aLPMkm.HM]D]%t-,o/b/@Ljx&?EAk7UIe:5:GHi(1--tzP3?/0 2%');
define('NONCE_SALT',       'C8)p2>o^ZHE!tKm+ B<B<]mM`_D0~{nPDQZz]Io?:{4iT.a|P|FY[,mim-0}]zI5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_hawkd_';

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
