<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cazachapo' );

/** Database username */
define( 'DB_USER', 'cazachapo' );

/** Database password */
define( 'DB_PASSWORD', 'Arn5551666*' );

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
define( 'AUTH_KEY',         '/?(^[.:^&8MfqVr MShQz=bB^E ^p.vD{*,Y1M0rxGLlU/AOX++F[uWDyO{!,`cn' );
define( 'SECURE_AUTH_KEY',  'Y5WWHo8vWdQ+YY{_-di6u8?j=5:T_-ej5W4UKifXIE/kF(ns$$Y_a:n.5WN}^ k7' );
define( 'LOGGED_IN_KEY',    '*_40GJUWKrK!V7F[&5WTBV#+@j|S4=!1IEd$^O,(DQ<:Fb)Z7=1U[(^#[mKOj0ig' );
define( 'NONCE_KEY',        'kB`#LAVfQk1wK75$9gB+UI)BDP5U;=QVx$B3cL(L.UF&|ZQ[3WFuo5Z&$BMF0j6Q' );
define( 'AUTH_SALT',        'zG.bXNaKxubSv+(:Y4*|#y~uXr>XNp~>z-Ov%NT:0[+#2( 0^lC0M=@aNtVDg@zm' );
define( 'SECURE_AUTH_SALT', 'QpIG>jdMQ=`eNFuUjZX[_:e3yo)?}=^@zg0Ap3zbJqe43P$[ EC @s,5Ae6!R|^(' );
define( 'LOGGED_IN_SALT',   ' P/;OjRPEVOswJ!cB{wlW}|q(S2[+V}HkO|Y]l|cqkB,`T&W7$kCM|,*:NveLBX,' );
define( 'NONCE_SALT',       '/ -K4yoiGsTCdB9~CKV5Jo!SnN)Z!_s|P.;AR^[xCc &~m,3[zJt`,;GHiM%u.IS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
