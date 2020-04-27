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
define( 'DB_NAME', 'heroku_596994a9dd42a06' );

/** MySQL database username */
define( 'DB_USER', 'b243a81ccd4d95' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f4b66241' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-iron-east-01.cleardb.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define("WP_SITEURL", "http://" . $_SERVER["HTTP_HOST"] . "/wp/");
define("WP_HOME", "http://" . $_SERVER["HTTP_HOST"]);

define("FORCE_SSL_LOGIN", getenv("FORCE_SSL_LOGIN") == "true");
	define("FORCE_SSL_ADMIN", getenv("FORCE_SSL_ADMIN") == "true");
	if ($_SERVER["HTTP_X_FORWARDED_PROTO"] == "https")
	  $_SERVER["HTTPS"] = "on";


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@96N?UA!YdUmU!rMg{.DQF+b/8(.Pg<}iTzDQGtKjT9jpHkpyhq8t$m#cfQR9ojG' );
define( 'SECURE_AUTH_KEY',  '!nhIM095K182z~e[Kw`{b(Ivcc6=$s]!zk$X#qrHNXzCgn+{k<tz3l+GfisvmRO<' );
define( 'LOGGED_IN_KEY',    'l#uB+)UxP YKM(SSb5STa/X+z6hAs 02A9.kq!yT_qXl|+:u^?:@$pVE-KW7J_|M' );
define( 'NONCE_KEY',        ',:q{ToXL-f.QxV^V/3|L5nzdXGs#Og2jaq:Z16cEXl-o[Yvby3(bsF*I`8<c?Cl^' );
define( 'AUTH_SALT',        ' q[vs=7}&Je@T#2Xn$eeU9.2expih6_Qj8C$3KQw4G}|ds9EApeueT`ti6D!uE/u' );
define( 'SECURE_AUTH_SALT', 'SA;GwtL0w6MK@c1bpb[xPy/!Lq#B;woKs;.#C{o::oLvrwh9jf%fy2Dd{2kI)|{#' );
define( 'LOGGED_IN_SALT',   'A_,GUDP`[BC0jZ5k |?W%!Bil{/l!ZzNg^W9k1xqnstvS[Ke^t[NWm5%5H>knWBN' );
define( 'NONCE_SALT',       'KbVAA;d%# M24/+S-D9Y`h_z/nvR),E={46/`gDl(tCMrE/>!afC(9t,/zoF2)fu' );

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

define( 'FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

define( "WP_CONTENT_DIR", $_SERVER['DOCUMENT_ROOT'] . "/wp-content" );
define( "WP_CONTENT_URL", "http://" . $_SERVER['HTTP_HOST'] . "/wp-content" );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


