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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quizez' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9,!]zI:J_/vW 9II}3sb{(T@b=5=;|I83R$d2WQQ04{h]=$=e$x(@8tS:~Wv^11-' );
define( 'SECURE_AUTH_KEY',  'PN5_0ikmHtK35B=wN#eZ5s]k{M|sq18od#VA91tUe 2:bY]WxN<4?j> V_vJo&0U' );
define( 'LOGGED_IN_KEY',    'yX], 82ATIHGMi}&=LaxzO|brPW-!1]4b@4I*kYSbU.wc&.@{2cU]p2#GR>U(GWv' );
define( 'NONCE_KEY',        'jPSLZoy{%= [,.l1M%n%!Tg<^|Q]B8-@,vjBO@>R3E=MB&r6(L@f,Mp9E@^E-VZd' );
define( 'AUTH_SALT',        '(M+uI>gcKZma=KyYvF;.R2V4o3@O}FsZB5+~sW^1H,K2%Ih0q%1m~t&]d!h04ZZj' );
define( 'SECURE_AUTH_SALT', '!u/yyC@8,h&:,`jrg&CP4XtC6Xdb9&$]{|.]~{Cg+X-XFlBYrs9qTky& D&B5VQE' );
define( 'LOGGED_IN_SALT',   '[xRH>Cfb[_Fg#)Ge}O2.CO]#nhqMvs!~V+?j41LOl`TC+zL5wIM2||Hx 1G`;q7&' );
define( 'NONCE_SALT',       'Jtjv/584@o]mG~Ti[r)6UV`OElG<BQg`7^63RK9D6Nx DfJ<q={nYBj2_OHVUWT_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
