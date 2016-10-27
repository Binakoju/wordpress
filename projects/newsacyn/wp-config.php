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
define('DB_NAME', 'db_scyn');

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
define('AUTH_KEY',         'mLZ1)52xY0~Fl1vcPty+gGH]NG(Avv]X[Z)MJeMg0D:eJ.ajip-U/Q3mf$vB~CTe');
define('SECURE_AUTH_KEY',  'tU}]8$Q&{_h!qxb3e8}7VmN33=E;,3D qT{|+%NQxo=U;GE_Au#/sFAc5XM0:78*');
define('LOGGED_IN_KEY',    'fYnu*FKuF% H-mB&KnoNW%9Emkg0n3/:HJ/GxsE0qJO[iX<BILgPGi2Qp{o fPxv');
define('NONCE_KEY',        '&zhBD~aoPS+0Rd.ysZu2F&0tYeQ1hV{Nu3HZ:1vk</D?E#5T);VhcA&_= !d9L{#');
define('AUTH_SALT',        ' ju|YOlqJV}1jb71 :J#Dzg<^E(h&t*9<=aZj5I(Ci?Ar;UMQxF}#v7F>Rj-vd a');
define('SECURE_AUTH_SALT', '>huM[KzwUn;f~[58b(!<DV9n0c75G>45l{2]J|r^1!%?Z:4AYVS?-(XDG3tZaih[');
define('LOGGED_IN_SALT',   'xKF,?v3Sz+!wY4T{JCu{Ux5XG!`C2A?>I U!OX2ssFubW7Uk~}%8iv0ff7U|cDzt');
define('NONCE_SALT',       '4rDCw})VPzxRB ~0H15kd8BThPKxZ]O%k`xmv[/RKl|$A,T%#mIa01mFHxHwGA?q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scyn_';

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
