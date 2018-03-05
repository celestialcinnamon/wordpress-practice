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
define('AUTH_KEY',         'Z/ WC^s1~^De`vJVJ$LL]JDONS]GuQC<w`:@6*h>d<eNnHU-vrRVXu[=x65ymShL');
define('SECURE_AUTH_KEY',  '^95ZdGN{_H;sa_3tjdl-~q-GW:,vx3Vh M<+4 r.4r;*/)<4P!cPW}455n{+-@J1');
define('LOGGED_IN_KEY',    'OQ1<^a&1d]kAi|DS$U<h-NO,W*%Hr?Cmt3Z]W,Kq^>]0x+w68>`4<WUsATrK}JRN');
define('NONCE_KEY',        'Z8dgP3$uO@qLgBA{&|=R0m.#- *?^mDkn?U_A#I=/%m~@!{F-zFF7H#: a^d1vT%');
define('AUTH_SALT',        'LZ|HoZc.o>fhiu,mhLilBL0r;Y[$pkJJ QLF)?6,/;y5TN6Ypo=Xwpl3%mn|GyH~');
define('SECURE_AUTH_SALT', 'gHC@K$1x7BcejRR#ahrx>Yxza810fzVMc#c26xS}yX@wPh?^cj85(X-b#Hlfw)lu');
define('LOGGED_IN_SALT',   '+@!V09`)d-OAF3Zm`zCVG<m)$ek}cx_0*g>GP5<>nZ=splflUE~BS-a4C@0Vm`ic');
define('NONCE_SALT',       'fG]r{TN_ZA0j55!z|v> 7Jnp^$HDF!sJ]4{~BI^ue_Jg]2wHirb[@?t}O+espxw=');

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
