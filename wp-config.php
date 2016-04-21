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
define('AUTH_KEY',         'CZP!Z<[j:dXpHW`XUb$5=sgI>288/{{?1?tbMaqJ;T8q-w0!wUE`a^ /OY{bI1}P');
define('SECURE_AUTH_KEY',  'A}+1IrUPMPUip+ HtMZUTJ-Pq@U>,bI4$dPKQ1%jv+K;i|Ij2G82c6qhpcoTy$B)');
define('LOGGED_IN_KEY',    '|YOX?R)kB[H-MMR<Z}P`8%S4C 5s|&?3pddJ>z|/&J=l:ho70`Dht ~H@%$Q}dXl');
define('NONCE_KEY',        '<)-Z]AVVGif^_l0^iG),p_S{<6#-`blht#r%EB94xA|3:V(~tu^lDPNd@8LAJxo*');
define('AUTH_SALT',        'N`>6cz]a<$lEmXz%An tEiJ#i9_#mvwWuuP!L1 cwS9.v.,/?>C|.`j4QLjiL46<');
define('SECURE_AUTH_SALT', '={mSulCT~Cx)7Ef;p+l/I(o00B(WO^8PFu.]@+ e?7~QxbFG~n=iV/]-p5]nx5.:');
define('LOGGED_IN_SALT',   '/sL8#u+b3)G8u-Bkbmq>7(%9yWwb/CxDH{iY/#MdN(B>Am^+-5*6q@gNI_U7VK5i');
define('NONCE_SALT',       '2}-n:wAs@y#-N$L4wxWmgMmj@g4:yWDff-`,t Y_h/~2A|dL!.P|qX&-4-]caq@M');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
