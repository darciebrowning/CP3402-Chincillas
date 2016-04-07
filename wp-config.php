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
define('AUTH_KEY',         'c_|}+6xpX3A!gGOrf&|`=gjvEE&[rM-VT|>gki,bkJ>I-_og)Pu^6#u$ycnd8=#-');
define('SECURE_AUTH_KEY',  '8CG|1|(`M7%-Hf+)0`$V&<(IQ;ZeUl[aIV:6R>?P&2pGO,:Z8Xc]w&<n+uGjV_z~');
define('LOGGED_IN_KEY',    'SOey|r2R:|}IM2_8k3]UWS-|0[%<-5&p|Ef@H4*j9#P[A3!=UXr0;C*VgnyY{+Pi');
define('NONCE_KEY',        '2R|bU+_yIwnfi[XZ{iT(G`xj(@%;|odVvU4;U{OW+|#RgkL62uR<+IQHQqvxDV~j');
define('AUTH_SALT',        'VkP%;l*RNLNHL4vGtbw41Gc|-kWun]-cWvh|Cy+QTV3,!r1qj*_/2usnar-/5]4B');
define('SECURE_AUTH_SALT', '&?=K-ux7-g*Ug|/s];kv%WEC[7mKw_H-@DVJJ(CcB8g@_3Lkq|QlTlCj,l.uBc.;');
define('LOGGED_IN_SALT',   '6=3/<f73E9]wNj+#}@xm/61PL9-QWZQml1&%z{oqvz0hY.G^Y-+C1Naz8TT{#*{ ');
define('NONCE_SALT',       '<.v9~8k+KR::[AkecH ]x+ lB9+<)8C-*9Y-hvzR#~Xt+8Q+3-XDl0]d&Y+i~%B!');

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
