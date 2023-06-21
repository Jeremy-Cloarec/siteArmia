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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitearmia' );

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
define( 'AUTH_KEY',         'v=`OGE7W5}^t8A^c,x RV|J]g:)F9#$7IQmRuCfJ*o]5d-U|1FcZa6A}iRT$c1`E' );
define( 'SECURE_AUTH_KEY',  '*dr]hnPaRoLg0!oTl7N)}^Q%-e{3%tS* (74-cc{HEZURt(1Msjln7IP`A[6[QWq' );
define( 'LOGGED_IN_KEY',    'Q>@?>c$X=>.uY3_VVD~`_|LEh}gck+82:}3E[UTx^[`|vn~:V+s,`O[.0ragcfmL' );
define( 'NONCE_KEY',        '{r*|H^{%IWvkBT[82aLMruT`~v91|;flosgY=?UDKL {OpZ+jX$K#k]r.yy9B^iS' );
define( 'AUTH_SALT',        ':b5}~li<y)s?w<M&.!]@=)SsG-Njbmm{1GC)TP9=v(QRe1O2w&FQn>-+xqDKkdb{' );
define( 'SECURE_AUTH_SALT', ')@DeBK@t,z1i ^v TanRquHar]d=)O`v*20_4$?$9X4,YS6Js3jIq|kv]HPY)+vE' );
define( 'LOGGED_IN_SALT',   '{:@2H$NbZp#;2ghJwp@sBQWaCLPyD.|&*xmhmVDg1;%Nz?LX^R63[9@]oSUNO/xs' );
define( 'NONCE_SALT',       '`S~A3G4[*iFCZ?.1J:e6r7<Lzg:ipYZw+(!?7-.tNf&%]foPH4l_ud(qW_eN=@/]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
