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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'sX-o4/f{hzIkt<ZWT,UU_4N=acQp _>dhMOEg|Y0+V|e .]$T.;x<h#j@W,;LxyI' );
define( 'SECURE_AUTH_KEY',  '|N@bYC87d#=n1vq> v@K7]U1-{( +Kqq;QJf:TBH*K*H#5JzM!)]r/#^fi:V.K}=' );
define( 'LOGGED_IN_KEY',    '_-1u yr]W/,sf-W`+%r}uWLWp]?3*rU~1rfwppp7)+HsQk`]$6vdOE:Izv;*igCp' );
define( 'NONCE_KEY',        'k~]M3ulz(fDoXFsGVvy]N GO/kx-.eC8K51NRL+i]*|`;3W%&5N+1k)7TPc^:<mX' );
define( 'AUTH_SALT',        'mHMH,L@PLimS6Ss/ge.[ KLxq. B:FP[!_2O|3ZzO?W!>z(=xn$mWM=a#4iL|x]L' );
define( 'SECURE_AUTH_SALT', 'vAiL=gd^&+J ;%_1xt7e%.N]jz$*2*S^7#J(ra?)>UW@:IP9MnaP7e RiO{=DtAJ' );
define( 'LOGGED_IN_SALT',   '1jxg=FG6_4V~l`eW2Rht!fCC6Eex[&d~A`8_HO{hv#MpGq}U RP|!Emd1t=ah=-G' );
define( 'NONCE_SALT',       ' YO,u7:5G_upjRT;X>L*6@A#K.JdMuJ;kR3sT79Lj@,# -T}WZ;~[]6:-g=I/Z o' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
