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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'ZQcIg<<m7Q<.P{T,:YYCyeV2Em#h9k<I%9Trm:!BKam4}Wmma?]7uDC6/?KW30Iy' );
define( 'SECURE_AUTH_KEY',  'T1HBRF)]$ y,fWUVsdP2I2$c!fCo52zPTrfNNDjKpUf:^_@@K<M+9oi=/anewv=^' );
define( 'LOGGED_IN_KEY',    'hmM3p+l@__`u0&TGxUG]#76c7DvCDP+48z1 *bvhV~fn$@hw1A(jNuF0?AV)v4=(' );
define( 'NONCE_KEY',        '2.}{>Rsc$6uSmX>Q| Qeb7aWZ(A|r0,B)#OWt0e6w ^[{?m;lq2$t?jPYR1P7x0W' );
define( 'AUTH_SALT',        '|#.QKHyFUAN>r@)0_=)~czD-;RR!J~$dvqhwZ#O!?bkk>ia.UV]b;VYY{<f)#|tW' );
define( 'SECURE_AUTH_SALT', '-zFb8hOm)9Uy}ls<r<fFwzAg+kb7nm[-HM2+,l6nGT:Wvmj%cwQE&Mo<t4SJ.5jN' );
define( 'LOGGED_IN_SALT',   'i.iS:.QwL=ClZag%RD)C;IrL6vn,Yk&KEI AvAv1RYi^KHi.[f>e<4e(cR?Q`V5t' );
define( 'NONCE_SALT',       'Lb&iF;y,]|<3kjIi4kl SJ(P|X HA4#44/:l)txEByp(0(6{>+^D@SQ5jlgf:U?;' );

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
