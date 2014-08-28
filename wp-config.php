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
$local_db_nm = 'vnsuccess';
$remote_server = 'nonborongreu';
if ($_SERVER["HTTP_HOST"] === 'localhost'){
  $db_name = $local_db_nm;
  $db_user = 'root';
  $password = '';
} elseif (($_SERVER["HTTP_HOST"] === $remote_server.'.com') || ($_SERVER["HTTP_HOST"] === 'www.'.$remote_server.'.com')) {
  $db_name = $remote_server;
  $db_user = $remote_server;
  $password = $remote_server.'vnaka';
}
define('DB_NAME', $db_name);

/** MySQL database username */
define('DB_USER', $db_user);

/** MySQL database password */
define('DB_PASSWORD', $password);

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
define('AUTH_KEY',         '7%G=H$}D#}x3+N{Hy!R:n6Nvy,z?JY+r*RdHtS*0ZeV$hcWk|]1<PREUTc>Fpe_E');
define('SECURE_AUTH_KEY',  ']3kY:9lt/{IIJov|m6].f1?.|oWw~7M05*93eD6Io|=T%|33.}L] $~gg+>f#-@6');
define('LOGGED_IN_KEY',    '_fG4I`J|,Tj-+{?X-/:}k9%dhAj9k&AOhFYw-TPv>f!Yin|r%+],/2|01H78A6t#');
define('NONCE_KEY',        '$^aakNT4`KP >Ik-:d#OJ)N?Q)e^CK$.+?kHhu@=BY/vI:hO_)QEG=$3|ry.{ O4');
define('AUTH_SALT',        'KLsTkb9.Byb~-fB+u$m,!d::SBe8aJ6(@Vc3,L9C@H ye6W^[)nDQr|~N&pMz <@');
define('SECURE_AUTH_SALT', '{d~0/]6/FTo)}ezQFfIanfR:V7pe-@6Uil.+t1g)))];;UPAYI/aBp;UHnz(ULb$');
define('LOGGED_IN_SALT',   'hDVD|P[wsV$mU]0P8R$D8D.IiPAE%ktp8;UGK[~hwj.OG?i-i>v7o^>a*?D#!SV-');
define('NONCE_SALT',       ',P9VXyu+U_4j6x jD11B0EHx~| TeHr!b^`Y4Lx^nIW|KtxLS:X,CP(~N+3)n@!x');

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
