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
define('DB_NAME', 'ryprestige');

/** MySQL database username */
define('DB_USER', 'ry_admin');

/** MySQL database password */
define('DB_PASSWORD', 'BiqdYdKdcF6OwKlO');

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
define('AUTH_KEY',         'zI.lr(EG=78|W|7.@%V2`>vV0Jb#A!=/Qx).lyO3yUcIVY3=-z6$ss],gOA!fV/0');
define('SECURE_AUTH_KEY',  ')8%U%^;szKwJ-XCz:%^-w[C_m:dKN!lQL} w^[+63+z9TByR}.{=cZhNs;D<lt=W');
define('LOGGED_IN_KEY',    'UEsZgT+lIx#sUROm0E?p{F=6.GF*5j|PR3~^HO%[n-?3t-KJ5d4m/<4`4QM|.Tx|');
define('NONCE_KEY',        'Fo[e$+W6s-p~lf3.mu[QP[o45VGp<NIHU;!|0Xw|];?a0pSVBgJLJgdo+.B2Xq;O');
define('AUTH_SALT',        '$N2)zvS9EM[xfifIo<jC/Cw/2K`={!2wNJ`51tGkM|X(~*&cD+~[hp* U7<@&x=x');
define('SECURE_AUTH_SALT', 'Sz38j5MjHO&]f.R3?64{d/p2EtioZAEg%6*0-86DS22qi;|N]-r.w:bwCgZ|z.uf');
define('LOGGED_IN_SALT',   '!+UQ&[t*z1Sb)>4vP&<F{K.S5?Et?|M%[lFr>^sgF!2!(F>Y)w`]l>/&w2w><MV)');
define('NONCE_SALT',       'LF+vCqn-L2jE89B--}kno?j$pSo+)YGtiX]Z|^`Lue|ur?d-Ie/3LYeDT%ky4Mde');

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
