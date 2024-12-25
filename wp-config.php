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
define( 'DB_NAME', 'shopcamera' );

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
define( 'AUTH_KEY',         '~&Hv=k *@PlFrAM#Kh-5CY:g]/?u?W06dy,h|{h]c0Cv7=MrCD47%KX u]!x6#%I' );
define( 'SECURE_AUTH_KEY',  'M@u1sYOlPI_Eqp5T+M%c5_nryeSb%RbGj]S=P7Z9OVcEX{mAz1r3;7LZ6,U#DxsB' );
define( 'LOGGED_IN_KEY',    '<];=+WVw>f&ElZ&|ue=p.7fseaa..m939Mf!2PKRZTkBiF}.,J-_O4t^3&_kHlXZ' );
define( 'NONCE_KEY',        '0N(X)V:3V&:P*rY-1:I^8j$~s%[W).<djYzXbyZeG#y[XV`v37;{iw:6GNb=SfM&' );
define( 'AUTH_SALT',        'J ^;d&-!I Jv7A`6&bCA]Bv^-(mP HC=kUK2JV|(%yW2RZ%}{ph B_#<*v~joUM#' );
define( 'SECURE_AUTH_SALT', '=YVYz`S9i4Bd0?j~C@}T2!NUYiS{6uQ_<t9(z~4Pf2iQ*zFc8(oc:&~C=r[{Vju$' );
define( 'LOGGED_IN_SALT',   '&>=tv,w#<2U!@;N;.t5GN_)jX^.I-o3^QJd<b&TS7^#Us9Uy}%s2&t*41S,H1)WG' );
define( 'NONCE_SALT',       'IU+?[!$!.}/!qCf{n/;zshgelzQ7;h:NbwW#=s-6rZ`#LaI~hFbsXU(V)#ZEbxXf' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
