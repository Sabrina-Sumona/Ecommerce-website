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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'N9!Z@{oQlM#:zK1vuM>]EBo=X^dkZv<+;hu5e>)wYcsQLw9vUy6._I#rh&VJe|3o' );
define( 'SECURE_AUTH_KEY',  ';pQdH:I=^ZqIbkU=>YjouiyzS3-Zta^)I)N=%TQQaX4jw}>8:r.2A(KML,dErru%' );
define( 'LOGGED_IN_KEY',    'J3,1+7#h]*#=ZF{g55??]E3g}@st}z)lyqvSO}*uRq=OcHJ=e:_;m_$[p]Yx^?U4' );
define( 'NONCE_KEY',        'g/d3Z#qvw}Um%S~g!OCGQC^Q6NYy(4T?5v( _Kc!F|hpeefl`@U?!q>l|fkn*-Bu' );
define( 'AUTH_SALT',        'GJt;dOQaFXZCCvsvX]7Y*5IN=OXRRYra$k$TfQF@u/H}3}V1q&dP8tJgq?0G*Q?t' );
define( 'SECURE_AUTH_SALT', 'dk6N_pp^|Clz7c>wO>A)/ZQmxmzh7dsW|Y>]&h@hH3@Ue@D/I%`<X}$0+dL91W$l' );
define( 'LOGGED_IN_SALT',   '~Y!9J>;*$Bg]: o=_FjOm!,RDjg>L@dFn;5vfQMw1=7IK[A&;Q {;(]^nD)Z&(X[' );
define( 'NONCE_SALT',       '0}`@;0AAYA!H3H{s;?Zls{`~%|LAqPxbE)-7,5Qs#c)1myVw3kWvx<[).lgQ!.C1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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
