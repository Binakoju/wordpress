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
define('AUTH_KEY',         '5#MWBn.]AoD]er^]Jb&}1l^-?#~J.TzQ0P-zR,##hDq,l8-C<f9%l?QzZ@0Zh?/,');
define('SECURE_AUTH_KEY',  'RZxd(!Vx}vrI+%7xZ#zQETb_!CQI.yZ5bqZO%RZ9D$w+f538f,}@BPo$95@oB*Dx');
define('LOGGED_IN_KEY',    ';Ep36XmwM3pI$wi;a(Uqnre(r|GIg]p/lw=u7 %!]&9{b!.yQz`nlpA}/ePd/8,K');
define('NONCE_KEY',        'mH,TJc=haV1z%Dv!1%<szX+swk1lg@Xb,O0usGNuJXO=Uz% vS2@<:/_NH8q%Bn_');
define('AUTH_SALT',        'V;78GAL_6[AdB=>?!Uw,ZPD:N75,?}wYrS^GB)yAr&Fr^dq4~xO`]XC[uoDb63d!');
define('SECURE_AUTH_SALT', 'F}}1kmbpLF*L%@MVew|WXS.<WB1FeIuB~KoC?4:&44hD:V|HUsmimM7T7`yZ|W*@');
define('LOGGED_IN_SALT',   '?t@G_lNSq m6z veo3RC-`HQYE~Q])Pl3HD)mWU#Yo%7$<>&>5LEdbjDx7!I,6x;');
define('NONCE_SALT',       '$5n%|U!?o&1EwP|ZdqrNQy 8zs<c%#K^[ydOtUfO`3QN(1YC]f=-ao$Z@NKvFpok');

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
