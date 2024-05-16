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
define( 'DB_NAME', 'ftparivsq_291986' );

/** MySQL database username */
define( 'DB_USER', 'ftparivsq_291986' );

/** MySQL database password */
define( 'DB_PASSWORD', '508fd6c96ecc74210e5c564005c23b1c' );

/** MySQL hostname */
define( 'DB_HOST', '10.30.54.189' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'W;XEs^W-fH4sB(ewhIH 2e?O>O_#%r7eBy1c><?X+/u3%#:$6A8V9<vdB1FN-Knj' );
define( 'SECURE_AUTH_KEY',   '@k> d0YOC1IX2uYbq1P+CHanM+ =xvfIKzL,U$Sc9K-TiFoCaT@<5oa8X>Ay5c;%' );
define( 'LOGGED_IN_KEY',     '4L,o!J3(?:jK:N9ElT06Z H$)QH{]^$#^t]J1]ZLNRc9%f?^rPJ+9-9/YAY:]1[Q' );
define( 'NONCE_KEY',         '(V?1)]2?q(<`It>g[~_,0,4F_!d1>]Kpxi{UkPuY6s.WE-E#zO2r&{UlF8oBkW]4' );
define( 'AUTH_SALT',         'yy@%RxnjJcqaGp}oJchM-i:3B+[~J,cgyS_<6hlEC4,,hS:1b>fOC)J<X)j@M~xe' );
define( 'SECURE_AUTH_SALT',  '50gjl?T{yYoBA4;W(Hd7pPE.$<wdpnJXJW}#*V@9]_sYr<}UQdVjxg^71/|%F[P%' );
define( 'LOGGED_IN_SALT',    '{]QS*=.W&Y0^>bKUM0+@~Q=3p{n/. |$6WIh!xxvy`~-l![fO-WNC/_ErSXkwh :' );
define( 'NONCE_SALT',        'nr~$+pAZHzZfBRE>whE#&u[cy!zmj>/#>Q-t`@IGJG9[h0qa(B7-kYOA@dI6)WB5' );
define( 'WP_CACHE_KEY_SALT', 'Z*CipK~)0?5c|M[B]VUvc,QJpKN^AK9uk=Cd.(AC}.kv%vwH@&R06w34Aa3zXly>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_AUTO_UPDATE_CORE', TRUE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
