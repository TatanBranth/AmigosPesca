<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u364564441_8Pe4u' );

/** Database username */
define( 'DB_USER', 'u364564441_absJ2' );

/** Database password */
define( 'DB_PASSWORD', 'O4wienlBIs' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gicu@h`VBv+0<6R|*C9gaO>w/VIC=l3r~jd3QT|]k(~_(=H!w5RUe3+X*SZ_~x3H' );
define( 'SECURE_AUTH_KEY',   'zBm8KhO_@UY|CZO:/_D=NLZzk:|g.SdT.P!h{*g[:.u>-1HrW/4}-luX3F&=@dL$' );
define( 'LOGGED_IN_KEY',     'b(je>,p7_/qggk+lhmb}f~?<:SUD6jGzCB=7)BGTeV[ch}j(CA$EhD88<$oHC[(X' );
define( 'NONCE_KEY',         '|amR1*X(YWKR6]bMqxwugkTS/84od8(1CEl9=f._s}u/KrBl~=+a6PlHAja=#D_a' );
define( 'AUTH_SALT',         'lMgSw+nUAA7m$Cu-|UA#EONDR E>Mi.Lw)t <zh=NDKD]&0+)ndh@eElj0WK;OQf' );
define( 'SECURE_AUTH_SALT',  '!?rM>d^x#.uZSc-+px3qn/Hn$Y&? _R.Q3mD[,7.0mejf4+!CgvhaHk>GxC+lBG]' );
define( 'LOGGED_IN_SALT',    '0`8nXI:]6}C@ltNX3)w<I>KxMv]Jjgh:wx-!;?k8@jA!JeXvaU&ZJ;3kowcS/*N&' );
define( 'NONCE_SALT',        's-zXs<U?xg|%RpKN,D2@laov7K1XC@ l[gcBb9P2sR,{7HqK[PS-P,KjMJ2Cz}C$' );
define( 'WP_CACHE_KEY_SALT', 'e_p<9j5&V^mf47*H%g.[*x?JrfK_=@;*7Rl9q(JfDIEy<u_An^TWBhQ%P}7D9|_9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '86856d7909af7a6eff7d5b90912c119f' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
