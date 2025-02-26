<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jxmirai' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S Zdj3BqC_1XgOEx0B#c61tgkj~wlI>5W^.9;%U6sr=<b[>wFa8 M|7sX0feu6 @' );
define( 'SECURE_AUTH_KEY',  '%x9FO@A%v3VZ77qzQGK:*q5<+X_HU)>1wYrZXtc@}/]o3TOv8A9Y6}]>Iz!r4^oL' );
define( 'LOGGED_IN_KEY',    'yf$B)hSTf)dPEtK]1-^scW+L|{oAe%piMtZsoffJ9h{)Iwzl&N:-x`o;U,sA+=]y' );
define( 'NONCE_KEY',        'vx3=HY(@j)QM=#[N=EP5B|^dNA*2@j/GK( 5g`+@3bRE29vjWcziV=SROHXU-a]&' );
define( 'AUTH_SALT',        'xJ3D`<Wz%:j^N(ev#6vB[fsCL7Jbe;VYm;d>i/<1j^Cqn/=b7;p1?1R{Ybd}~=D ' );
define( 'SECURE_AUTH_SALT', 'Yo^%9Tt<hnSM- O^7GU}wq9-r??0J(g*TqhDtn<;u6kdTUnv<6vlYV<spEX.?~Hb' );
define( 'LOGGED_IN_SALT',   'gfLUqz&rvN K@-o9W,Eve(Ms1AK)R)/5zo}!B:J@HI:>S#dNDoLn[1H.GQm^B-IQ' );
define( 'NONCE_SALT',       '8A)Pp(tMMN{CR=#cBy*(+iIfV2P5e6]f0>g5]9Tz=GN5hV.6o[&S~QO8OPB|+@|=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
