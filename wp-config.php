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
define( 'DB_NAME', 'wordpress_woocom' );

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
define( 'AUTH_KEY',         'dKw3q}SlU~02J$Ph=RF }(-b8iyv&Bb>$=-VaKb;xKl:k!ZCnV2.K+2P>7H4!*1w' );
define( 'SECURE_AUTH_KEY',  '4n9Omc,gw]Vm>-WWIO/JV3nbuZ_>YTLVTh$J~LD5=9.^P`9rqp:7J2ca@+%RggOm' );
define( 'LOGGED_IN_KEY',    'LwRxVgktmDT5@3hqu-X`m.8j x_Mh#|ALE0ZW[5w*80tn4[ ll(ULq1c|L&YSJsy' );
define( 'NONCE_KEY',        'O8hbE*Q-lj$|*N:T=6:k6HJ:5|Lj*.`:iN`W~kGXp*/_745=g&3lS2B1>R+{^WQ;' );
define( 'AUTH_SALT',        '4&=e;}AFH=6lNKSEOd#geT4V-}mofN0kc#hm(la9-AbQ!,5Y*GzpNQW,LuScW_q4' );
define( 'SECURE_AUTH_SALT', 'f:PQ?2o}h~M0~GNJ80]H#&XM]FJRCuAF40oG-Xe2+!=h-mwHC|J7pAU6YJjVH?iz' );
define( 'LOGGED_IN_SALT',   '/?$KC1mh1:8QP^2Ny@i/;|s`xLF-!n@!;;dDhTObf&b}eoD<;-b/O#i$V hL_q{*' );
define( 'NONCE_SALT',       '(O@WEgb>=T/[@[CdN,mU=[rQUP)4S.K;H<%)PyJC+}Wp3MK+Q&Fj==>uAB%VIWq6' );

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
