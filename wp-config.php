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
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         '|x1``6D0guMB8X}uo=0N*7^A`M{$mDp&.ZC,rC9wX$4)B&YyPk47Sm1ooq}D4TGm' );
define( 'SECURE_AUTH_KEY',  '}BEF54O`DtVcx>itP2n_YJGi?|GQFHm((R_2?KGk ) dQo{X~S^$mb599^OO[FNM' );
define( 'LOGGED_IN_KEY',    'fUoZ~>Z1BSi&aqjOxfc<G0PBe%k$MtZ6@D+5Rb{i;R%YV:!MT)Isb@ep<6 $S5LH' );
define( 'NONCE_KEY',        ',^h4Huog ]9^(2I[X5+L&ZETUibB1Zd*10U8brW1!G2EZ 0NkJVVSu`!:V`}+LH;' );
define( 'AUTH_SALT',        '$tD>r(_[01B@m&M`YV2q&NLLVv~RQCQr`1bO7R:+_B|HTUbuqbi3$Scyz.$=miK{' );
define( 'SECURE_AUTH_SALT', 'G1pZ2ry? N%IC#xwN6f=F(6/8*!k+<u{[_]G?^A{OnS<DdoM~aB,QL*dy8n3iEZE' );
define( 'LOGGED_IN_SALT',   '[B3zm8QN9t5&VonS-{*4[(q`T3M[0X`r_CEso%!Hxbc4X1,t#Pw<G-UE)*9`x?iE' );
define( 'NONCE_SALT',       '_CPx3Ax7C 5p]j2;1e@uwSAwZtZOT1T^%!85#lo~p6H5o&=jvq3Mfr^1%|A0]bNs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
