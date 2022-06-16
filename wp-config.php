<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bistrot' );

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
define( 'AUTH_KEY',         'BfR7t<a`P(zYMWh~u]e gVChZ@(_s{kj]d3?j1e}kIp<XI2dK({:FY!%bD92n>%9' );
define( 'SECURE_AUTH_KEY',  '>;,Ky|#/~/Zx.gP!feJb6x08;Vetw:M&cFE8wX.bZqVrENfIRUN%LH^Vnr4 cLBg' );
define( 'LOGGED_IN_KEY',    ' !AsdvCxp.SWU/0g;5YBlhQ`.Uf7ZX1#F;/bg%ki0Gtf=o;rhOg xrCqE/|eIUQ6' );
define( 'NONCE_KEY',        'uF2L<pBAUt2l/Dyp(O9IvPd2.i9dku#nt5+Dc/|K-rSX[cV}ws4sKn?nlrl+y&{!' );
define( 'AUTH_SALT',        'p,L[C_mje[U|U=(RjW_TfvGDncCK8X[zRe@)d7/+Rn5> ez-zZDfe%s.n,O%nhjf' );
define( 'SECURE_AUTH_SALT', 'fU1O<qRR7{QdF )_6Z&l7y&|/ukZk-WW0sMvB:,1Q0Jc|IBb )mb4O ioay7:@kO' );
define( 'LOGGED_IN_SALT',   '$7@WU2,a*y.B%5>GNqj#l#PCmwpK3GRo>Icq6[s`;U].kAY@[,qt])>$`a>QB@wY' );
define( 'NONCE_SALT',       '`{yt}kr$o]5Zjx&0nO01./Et`A!%Gf_vlM dv;djwId#9PMHFfWD6ZmmG| .kSsr' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
