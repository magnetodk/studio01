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
define( 'DB_NAME', 'studio01' );

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
define( 'AUTH_KEY',         '[@wz56t^ [612X{wUAaX//+VA}a^OKqPX(S 9?2J2(0)>1kz r%p;>1fu^-ZL.C*' );
define( 'SECURE_AUTH_KEY',  ', M6l[V,ci+,nJ~MN*QF7oT4&M#8Bd~To|;v?EhEvzE16ndsrnzJ8+H$%RqBuHps' );
define( 'LOGGED_IN_KEY',    'TmB,4)!x^;LQ%=aZdbu.cZ`,p1D*)5JhTt:kVv!|TC@%37&zs?YS!?U,I##xDX7]' );
define( 'NONCE_KEY',        'Wo0=v6#G}T,8%!yfe4;?3V8lI%|lSWu=8(wyyoA,VbhJm6d?<yE0.hqz;Q2by:O/' );
define( 'AUTH_SALT',        '#HmP;!tXLd=t$hrce/7ywE/+R> )6F9POOV!)S$V.cb{VLmT_QY#-g>UV#g|4Cl;' );
define( 'SECURE_AUTH_SALT', 'o$|lUh(WM;F.Vl|gap6Y*%v(DC+KviTKmK. h8E#~Ll*sA,5[~ACT(#J:|u3gOjs' );
define( 'LOGGED_IN_SALT',   '5*aUUEiPyU{kmXJxBkN~[8~ka!?gqp5Z5oS_Ld~7X*{6v>K;-V3$DXns?&)V)Nqe' );
define( 'NONCE_SALT',       'H_.s9!m/9W(B4/UO$#Xtv[b:ODJ+8bZz%1?MG5b@xAJ]BwrtuT5j@ 1OCBk<8DL(' );

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
