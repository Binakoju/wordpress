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
define('DB_NAME', 'db_sacyn');

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
define('AUTH_KEY',         'g^VJ@<]4r? =(.k2:2H=8z$[Y76Fmy4=-3KZ+X9;~4.A>dx&WM_4s7L0Mv([q0nj');
define('SECURE_AUTH_KEY',  '.P2+nXnf+BAC)rx0EZ2F&,[v n=4&q,YZqA[]@f;62]&e,vn3^L[EDp$y;1Lm(Ed');
define('LOGGED_IN_KEY',    'e6LkFmGI [VgOqyYYCRom@.-I.jMUv_&ye5$[Y_;e9lsOu~wk=0c$7Bc#rKv>^sY');
define('NONCE_KEY',        '^821$-hSP.jnb>q`uk[}Fh1^N6*aQI)r-u>=FA4R(xO43*J<tK[6iV{2dB{7]c+w');
define('AUTH_SALT',        't(nMH~Y<MH9@D|X+gX:IRI9}dL-t OL_17RhShKd%N/SM9BI#w1FzJqc`pG3,JD9');
define('SECURE_AUTH_SALT', '! Xf;vsoFq3{!n,vL6>k}fTV>hv~pXPT=+w`Y.Tqeow(o9(R_D4Z@7g4L`[;}K b');
define('LOGGED_IN_SALT',   'gAs-ca*T)Ja{Vm2,&/8|a.#K.-c}x?f${S~tX]c/2oOtZ(*Ibb?BMVMPN&&~QIDn');
define('NONCE_SALT',       'TNv6m4>4=b^U)7/mE$`jHXqn`s:7icAkOJaC`KsJF5-)84gL&Epr*4:/39?Zej)s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scy_';

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
