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
if (($_SERVER["HTTP_HOST"] === 'localhost') || ($_SERVER["HTTP_HOST"] === 'localhost.test')){
  $db_name = 'vnsuccess';
  $db_user = 'root';
  $password = '';
} elseif (($_SERVER["HTTP_HOST"] === 'news.vnaka.com') || ($_SERVER["HTTP_HOST"] === 'www.news.vnaka.com')) {
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
define('AUTH_KEY',         '|BnwEm_p[>tJ4l&$hH@gdvx]sK)8fT`n2dUn4p+:V* bJ>BKB9f&N|d-@$)eC6sv');
define('SECURE_AUTH_KEY',  'd5R%dWIkCY|{%P7QO_~S}lu@_~XLG_Gho.XFXc]<mV N^H.f[:{jh|46bkD|/B`N');
define('LOGGED_IN_KEY',    '_7h2H,Y3oXXr(UE@@|Jod{t3V-0#-L]NkQ)?0x8|, mpF9C}@Q<y2IaCWnwyM#6X');
define('NONCE_KEY',        '#+HS- CZ.<GIwuMXc|&%BS?@1Pl3PMbw?s+Fui+?q2>wz@m}=YTA7D$ke@L1EnO[');
define('AUTH_SALT',        '}E3HVsKw8h3h`;XkOvgO!KTtg*xQeC=P;Eju&xl`}_n@[_q!hAeCtM`ao9wi^|+C');
define('SECURE_AUTH_SALT', 'kQa> 0uYFiZe}WU,]u :X&E?,JmVU}NUT1rQ3_a0ufs?QG/{:s:!o|}Ja,_)b)D:');
define('LOGGED_IN_SALT',   'a+,O-A7>2P<d8pr-6;;L7;xgAGj2NJd*5Bf <766-LJAv$O/5!:3Xv ?kO|WGlX+');
define('NONCE_SALT',       '-]3l+4MT- xH-&!k8p)ge_GlqaWF_mC[28|jm!/mS2kQCo*bdHo7:U?ar2|V|n|W');

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
