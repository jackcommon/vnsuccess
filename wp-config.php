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
$remote_server = 'news.vnaka.com';
if (($_SERVER["HTTP_HOST"] === 'localhost') || ($_SERVER["HTTP_HOST"] === 'localhost.test')){
  $db_name = 'vnaka_vnsuccess';
  $db_user = 'root';
  $password = '';
} elseif (($_SERVER["HTTP_HOST"] === $remote_server) || ($_SERVER["HTTP_HOST"] === 'www.'.$remote_server)) {
  $db_name = 'vnaka_vnsuccess';
  $db_user = 'vnaka';
  $password = 'vnakavnaka';
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
define('AUTH_KEY',         '_S@C06|k%OB:mzed$S|m<f,#,cqFAH&`iihNZKb|M51Y6O5R-xN%%gsY.)e# <Oa');
define('SECURE_AUTH_KEY',  'wHSB3Pl0z%vD|K>g9EmLw&|-!d+admEo*CPGS;OZbK(Y1mZI$N1YBam<;F3?L2?R');
define('LOGGED_IN_KEY',    ';8Yh>8Eg9Y4TKc%56dQy_$41!b`+5Dy++8w)@ P*r!YNCe#y3(O-T6?SHaZylP_t');
define('NONCE_KEY',        ']-`0go8NRHxCJzvp*QoM 3sYi|sQXG[OiRF5pLQ+yiC).9/Cl~tk9?4y>-v<rFre');
define('AUTH_SALT',        'x60e vW/.X3[^]<-VY|xyBn{[W,_$rNFkjo#wl9k@Eb3jF6y.8*rP$<|Ceg-n|;z');
define('SECURE_AUTH_SALT', '5|rt}[eqx~v{/xD.))L==u^y9=|-sg<meKWG{-^k@T%Cx2LDVt<!3$.MpRgiJ1{#');
define('LOGGED_IN_SALT',   '1grS%|.2we.4UCjw-P{yJ=WdfA;Hk!-b0!knP_,:-}TJ@T}Az&RoN$wMP&<Pa71M');
define('NONCE_SALT',       '7K@D.xM9=Nae)i.=|ku#rFrr-F;oa:`gsM,?A zJdkta_HcRS3B/t;-lG1%Vwfi|');

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
