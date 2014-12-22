<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vnaka_vnsuccess');

/** MySQL database username */
define('DB_USER', 'vnaka');

/** MySQL database password */
define('DB_PASSWORD', 'vnakavnaka');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^pSqu|#^}!aW!k I^oy#o6P^o6gTW+XV*1q^Kn-/4q_(*%$:T@]a`Hnz<U8mz-SI');
define('SECURE_AUTH_KEY',  'Y7fr>r2r:v[f ,KUlhVa?*JG`k*g)~DsKBtY`wB|y|vxz<$Yb=z!(3:uz+PL$#5*');
define('LOGGED_IN_KEY',    ']wW_m3Fg](26~(DF[{eEK=+;_G$sw4L95}MkR9hou`9*a,v}t<P|BX*%uu&992xQ');
define('NONCE_KEY',        '>-DmbkIA: UC=Rg#7J_Y%XoG# w6&--Gp^<K~W9IT9y8=q2~%;LL9iDK5H?k Sqc');
define('AUTH_SALT',        'DRA69vt5(ayZP] d{q6oz];b[mIU WAwef+I&%g-IND^ztYBnt+Z:+XZcsU|.lh7');
define('SECURE_AUTH_SALT', 'u:<~` r1$h5NUJ[mIh-L?<u<BS*S[B38[z,8Ayr|w.2OwjI0]N~m r=;WR)3]bL9');
define('LOGGED_IN_SALT',   '2ql+PU5D=)ADG9}KH5AITB|^;`|9:Tx6,n=r#L-q&?qt6fj#-5OoD{!yu&AM&B<&');
define('NONCE_SALT',       'Eku|RB7h|*>`X5z`DwlWALC_<e%(%_UZT_BK.v=|_%x?|95cB^9.q-Lfp8twc|fK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
