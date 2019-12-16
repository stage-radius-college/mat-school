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
define( 'DB_NAME', 'wp-mat-school' );

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
define( 'AUTH_KEY',         'Ialo{I[!%tgCw,m3~rpbJgM`=|!Il&4T<_KR5zoqzZme`=h:;#DTdCfJbw>IvtlB' );
define( 'SECURE_AUTH_KEY',  'YvYQqN6~m^ehtx#^is|ZcYcQYlw]819h%}f9p]53=UKS^|PdEfK9 ;Dx.#IcT;_<' );
define( 'LOGGED_IN_KEY',    '!+fZK$EK6_`L_2g85Tt_;x=Gl{+1$ImB>.qq_Zqk}{fEC7^Y>HY`]s7i8Ozxe^Cs' );
define( 'NONCE_KEY',        'FOVLzgbw6~Wrko^2bf)1:@Cj!{~ov1fE{:GaFcA^OY*;v:yof&sXaRDVyU##*N d' );
define( 'AUTH_SALT',        's1BL7s;o0@qF}$WX68_<f$+$.Od-Ufj!1T^YY?,q_[~kP4$fT@:VSjKBxBwV&9Sf' );
define( 'SECURE_AUTH_SALT', '4f~;QoY:^?zb<5|6G[!Szj#~)t2^B&7bMQ0<U6^IdD;Yl9fxb;@S!-%Eq/#`Et5v' );
define( 'LOGGED_IN_SALT',   'p%`c`Xu(@qFKa=R|+s3~2mGGDQ&xGba7;6`Phox*osdTR}9c]rYN,QePgp/1mPeJ' );
define( 'NONCE_SALT',       '^lr~vofUgu0lwkoq4nGbJvHYt#6nU2e>S[4Fz3e<Y/*jR0kBWRbGn_}O47{vu2<@' );

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
