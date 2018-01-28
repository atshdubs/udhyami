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
define('AUTH_KEY',         '>!qkew*em,]Vy1)><:rlue0?A+TV[YDvSQ7=(6 6,kI|^/ND&bBeU_cF].2Ja%.0');
define('SECURE_AUTH_KEY',  'EC%gT_+C8ZCNqo03UnX>@GZc{ykV9:qc[9J!xw&gSTrUc|jLdls8U67gtl}7/C1+');
define('LOGGED_IN_KEY',    'rjLf9B(mgn;cj5UzZeGd3(1u0Z)qyoJwOXc0VltO6`>YKhB@DC)oz!za3sP|?`m4');
define('NONCE_KEY',        'I,Nx<3%%<~)/2&68UMgzi)8}V}Di0&OQ~%D/Bi+#qg/Y kccC]:0|hyD66Tk6A+|');
define('AUTH_SALT',        './QFo939zAZ!J{i@M]Tzv>JxGzb|&$Ak/P<3_83sUAD@k1Qa``)LcV3t}ePZULsO');
define('SECURE_AUTH_SALT', '~vDxIImfQ^1-sXgruP:ZDO@l`UrLcP^T1j6U2g>6zPC*@Cjo]2R6e*R76`/iirnm');
define('LOGGED_IN_SALT',   '!<3iMqF+(%`@.gcg}G6LM@`ryJw##id>yiiFg%7`%uN#E]C_-TXHZ*ab&G^X!rUQ');
define('NONCE_SALT',       '{<.?d=nB4_QKf_f`gQb_AH,6/sqegBkp8M_ )viU4v@G.xyFS?)I@Zp f$PoLTfk');

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
