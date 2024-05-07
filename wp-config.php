<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'yashp' );

/** Database username */
define( 'DB_USER', 'yashp' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'q5: )4sa8p5Nz/u.?&uUGn|5[qvFH32w!5Q#<yH>uGt$hquay c(;KLIUf** Op_' );
define( 'SECURE_AUTH_KEY',  '-MwLq^Zf(sPQY,dWX.*[[3K:/@d`PuaDf#r[$v.|Su{sh_}/(}kUO/xZyEZ`f,N[' );
define( 'LOGGED_IN_KEY',    'NhTCZa^M-@qvV?ez#i0$C2;^Jyupi60f_hHT(oA?ay:kuN;}r]ct}2577uHvzM+Y' );
define( 'NONCE_KEY',        'd/L$!6e~#XkwS6sW46|Kp#05qD,09C2*4tdDy4OS/C:ik&8)f!VDIr>50s@+O@OB' );
define( 'AUTH_SALT',        'CXWQdOyE=U#VWZR-J;.q8^laoW!9+TC+u:&?dvPHLE2JTa<)hz=}-%eEiX9e|Bjy' );
define( 'SECURE_AUTH_SALT', '*oeU.@ >!~KYuLDTlVZiPM) 7R|VD~`4:jI^BR]DL5as#Ym0]9E74m9[2F&Em5Ai' );
define( 'LOGGED_IN_SALT',   '&@}-%&[<0hc]Z!QS(]<JH,3w<wlO/Y$fFY3!WBq`F$Ib{_,Rg_xlGr%]=~HNZG8x' );
define( 'NONCE_SALT',       '#5n&#%+HGG_N1/q{<spT)K0=5{BZuS]y&Mrh)e:>mG4KJ<:0JI|MBp|~Os?3RL]V' );

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
