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
define( 'DB_NAME', 'trabajo' );

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
define( 'AUTH_KEY',         'ZhtBjp-!_uB}L{,AzCl=WMcdyS+Ku;-A/=63l.[WVFK=|Ey4+rOC,eAZ,|Fy8oLm' );
define( 'SECURE_AUTH_KEY',  '2E/-R`Sgyb(.M}j[ItV.~%XOj6^C7=fgu$=LoT@xBJYw{uhg^A|Nj$FX1Q7Qd<r ' );
define( 'LOGGED_IN_KEY',    ':0_M!2k|[.5J4htPvy&a*RQSbjF5#dWE=jU-6x,zMi( plNAQ*zPDOxo!?]i7c[+' );
define( 'NONCE_KEY',        'Scn!Eb^j`h,8mVq.R<]1RNxFd).`r:=90T^1)peY(BPgb4O|{4zX<0h,?:!~OfU}' );
define( 'AUTH_SALT',        'J 72S/2s0jOmIG]a+]}hg-Gs m[FsZT>*0>6QLXR|&;K<T`BE<m+,gP2/V, >$4P' );
define( 'SECURE_AUTH_SALT', 'PvYoCyi293-`V3)a! #1;@IX8l+e^-W58u37jH54uihRT[-}{$4R7w.5mB?`$nAy' );
define( 'LOGGED_IN_SALT',   'UD!gUf?2lUmufR-xY0r.4!+(KS_jKdw!$%80l~An6U&x7JG<f&KlWD:l1rKlPW (' );
define( 'NONCE_SALT',       'g`WT4w!nqRl$<MGw_I_@.4)Qr5Y|JCo>G_LE_XJvaVzV#Ppjd2, vu)a^&>L9V}X' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
