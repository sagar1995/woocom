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
define( 'DB_NAME', 'woocom' );

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
define( 'AUTH_KEY',         '~L7e.|5`#ejq$<}[QH~%]6P&E :i9:Z*<o`Z9DO:/P*_-]-u@]r1!=Mb5g#4;[|A' );
define( 'SECURE_AUTH_KEY',  '}k1p8@^vt;wr}7y1qCTGA>c@F<?%,K]prrQ=O}Xj ^9-J~2GAsq4*5y{;qqr*$~h' );
define( 'LOGGED_IN_KEY',    '!4{jM!`X#-q:K;on74C3 `oa9t<gA>Ln-UqU?|169XqO@OLv6`J.{#g9w=<?1}pe' );
define( 'NONCE_KEY',        'dXEzd2rsQ:iS<YwpdZ%~5T0gooT:D^=AKRLTM8`Cz{Xt(mHJOFN|l.z^@^gMLd;&' );
define( 'AUTH_SALT',        '>Fj,w_uAX)-np48/K ?k_Czx1s6>K9(>u<U`~k`cma]J9uS0naGkYClYZc2/2kb$' );
define( 'SECURE_AUTH_SALT', 'L8y2oO,}>a[b#ll+;B/s?<y`7y:mLo{L?Ne@c/t]FqIsQyadqS;-Xg [a;L&f$ft' );
define( 'LOGGED_IN_SALT',   '0}g/XmABrq|_.j0b;}Od#)#[RQJDT^cs+0H%pQq`zaD6J,`PRS.VtOoXIt[N?pcu' );
define( 'NONCE_SALT',       '3Xe>.X}8k>@&{oAnF2m(o5.J8#iNz-jDp$^O?x|Fr/O;$fPb9Ou7.SY~,&Av{=02' );

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
