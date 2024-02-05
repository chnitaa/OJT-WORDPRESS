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
define( 'DB_NAME', 'profilweb' );

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
define( 'AUTH_KEY',         '?.|X?Tc7OY.y6YDi91MuP,P(N7 C4RWzPRvI@C.Xc<LB{4,};#D|wALh~N..t,dX' );
define( 'SECURE_AUTH_KEY',  'L{g<y!O0cc278,=qt:1k+BK8p@$qNV#;IwXaqBKAQO6+FPyw[|k(W}xv&<!:#t>*' );
define( 'LOGGED_IN_KEY',    '.>Lc01*C7!$$f_oGCG6>ON{4}X[E6C~3RFqTb`?1/}qW?vO%nC;>E&%11qp&Sn0N' );
define( 'NONCE_KEY',        'ip;fP+!3d+j4s4*V69*Loj6fts7#zI:Ns^w!l^XV]7 d(e5{t<)m=Ucd,f(qu8D`' );
define( 'AUTH_SALT',        'If+)oU)aesyJL>Y23)|.#-ey9=pUa{m;e?rg3kKw/&epz?s5a<RHL3$h2s2@7QF!' );
define( 'SECURE_AUTH_SALT', ')>n_PU!D[yh2Iy+d5XUw9L(wxqx[<F t?gAx]YbHn+FYWb-]xdCEH@Pv(+Noat0e' );
define( 'LOGGED_IN_SALT',   '4Qkb)sfptpC+;]@+n0::w0aQhhEV_k$]5M/.Vwq3B{D7Q`|=alAB}$_R|rLnwf4H' );
define( 'NONCE_SALT',       '#E.8y+*>5s-SATD|f)| UEZ2rk<q-R_l7WQ!g6<*ScHW}^kN5)COR,@2lT7<yOpk' );

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
