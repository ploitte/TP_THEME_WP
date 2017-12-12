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
define('AUTH_KEY',         'X|^a,Ug<m_[0cYJ^9HfVT-NH[DNz+zMp,zqq^o^1<r9[#B!_x:PIC%A_-8@qliyT');
define('SECURE_AUTH_KEY',  'h=v~ouLlBvXCQp|^re-{1S/#X^{KTXXiYf1=/03#@=_>s}6*:)CQeJAy8Tj]YRw-');
define('LOGGED_IN_KEY',    '9*X0g[KGE{;ra@>bvz3=ULq!L]hJe0x|88n-?Rtm_i!FG,VDM}6p.X(IZ`6 t.-R');
define('NONCE_KEY',        '>5^15z7Fh~#I^,l (SSc`In0}XEPX10P0pWwY,pM?<8nwqoAFAN<d]<5u!}.8qL;');
define('AUTH_SALT',        'V#3{nJ8=R}Y=a<Pkv+dOY*k_9M(H-5>zPNa`_ [.ti-vAFk<c.#Z|(#og3lrZYQ}');
define('SECURE_AUTH_SALT', '|[T5<+}o-$G<7`Nee7yJ7b`8Yd#EJdj}~W?&bpn ]2u8yw%otX^fwQBE7F&Ye`>W');
define('LOGGED_IN_SALT',   'b!>8JnBfI(&z3KjDwawB$(m?qY #<9RXIAhW4zzhlb}v4eo[D4q+z{J#kPEZRDeI');
define('NONCE_SALT',       '}#O0tFGi!i,QueZ<?YZ~~mN<$3V7ime5v>A/:c_FnRMPQQ~Zks#a.ufK^/=.nih6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tp_';

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
