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
define( 'DB_NAME', 'sajib1_db' );

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
define( 'AUTH_KEY',         'l{`8_#SOJC1j7gBTirvj Y++m.(9YJVSU]zToU0v>m$|)}a<%AHkdRaFRFMt~i*T' );
define( 'SECURE_AUTH_KEY',  'R!-y7(;1J&2H_D*^ 3-,)qt/q3o^$|U^=ZF1yeex!SZnx)OY.XYzHRz$/jm{VX&z' );
define( 'LOGGED_IN_KEY',    '*9[(?3_z.JD]vIs4:@p|Dms<Hr/$rax6a{8clx6p=(Z&H/9y&#u~O8>[/)ZE9e=N' );
define( 'NONCE_KEY',        'Nb4)T<tb2m7LV<|`$>4+!lOhQ.0vh;PpRb%^6g%ndzu$2b)g$@Riv!)~DD@hu&cb' );
define( 'AUTH_SALT',        '+@+]Z*EjYUgb[ :(pxj^ NG];(!CYYuA#$*q7$l@K;XB!aBc|^ok*Hy%e@AjkuDu' );
define( 'SECURE_AUTH_SALT', 'tLc^u0=L[htZBw{>gHt<=cqGVi5?Jiq`P7:6:+e|BsM1UwGUA*+PPMG%r<L!0,gx' );
define( 'LOGGED_IN_SALT',   '*9UiC?pN$52VenNO3~SS0Z^~Nx<|kV@vB|.B_zyOiv:N-=OHuilhaGS@o*r;vJy4' );
define( 'NONCE_SALT',       'T~@4KJX<,7j[zZ>`V2bBL_+Fb;HhiE)#~aGMj.*OYO CepT3Aqm47ry!u&9(qdP7' );

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
