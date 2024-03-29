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
define( 'DB_NAME', 'artyomcheg_wp2' );

/** MySQL database username */
define( 'DB_USER', 'artyomcheg_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NZ2adrHSJ' );

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
define( 'AUTH_KEY',         '}HB`!Oh:wM9m3~43dqjLW8X[Z!:j!TJB_~<Qx`AZ&Y6@R-3QQS_xWX/djVV0I9wx' );
define( 'SECURE_AUTH_KEY',  'p$R7fIbL(y6B]Rk!Zo/Z3zkM&=7$vpG+ui%KSWD+b0;OZD<LNp2a_`Y^ZwQ.K,7,' );
define( 'LOGGED_IN_KEY',    'SO?%_uYKEmneP6F#Cvmk(75IY5LZU}?#PjEN[s6 rbQjLGfO^q*nb6-,|0V/Nrb!' );
define( 'NONCE_KEY',        '#Lb9YBBk*K:Z,K;|ryK.Jm_xfy`*[.>n6!~HR{A<wu+Df INL*yErKE951bW<Uy/' );
define( 'AUTH_SALT',        '|@|I6Kme1f,ue]mKoIa>9JR[Q^LuJmY0#MM3l3#|5:HI6(p{pWFd.Lu5A;hl|=}H' );
define( 'SECURE_AUTH_SALT', 'FM2^V,yj7QrS{V0ppZv9W2 #@$)vg>D#!W~),&Ho~46_[~bAV~#)}HZ)],0=&7eY' );
define( 'LOGGED_IN_SALT',   'cj+)`s~i*T.5R-1m0PQH^_kTx=*:Iq=l]LT:| bnOEBNso&jMg3L8p}:w,;[tH3_' );
define( 'NONCE_SALT',       '<%AR;0sZW;:8CRSK)zp^r#aCNs-x`Bc)w9P^X]ljq Cq>O@^i`]0k!Np}j09rFJM' );

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