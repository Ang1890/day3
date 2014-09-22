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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'Wn.^v:-1#GuqH/6btwrz;LYnZh?m@u;03yY+[@1c7b0DLX;`.u{`<S:8%fX)-h;4');
define('SECURE_AUTH_KEY',  'G+-}E>`O&]eRmE2DP|rU|D]bb-!Gmt_&kJ.EME+<.+F#4SEU4Xr:eVJ{]=NTriF]');
define('LOGGED_IN_KEY',    'J7S@AZu.#+-Ipz5,YGN]ifQ@@BemYHKid!hT*3:/sN *{.~L9I*~xF{!z {)|KL$');
define('NONCE_KEY',        '~)m-:i#A01rhZk4qg.DDmAx:++h8c=I5V-%+6Yhr+1OzcT5?,h;OEz/GzztbS?3A');
define('AUTH_SALT',        'd~8@wgm/|DJD)`ZQqn~&v@+W]-lmG0//h30%y(YEuq9FE@Xmem!kTcg_%~FxZE4 ');
define('SECURE_AUTH_SALT', ']+xa&f/Z-/9PXaX Mj_jHUb&Px1]aoaY!sTYQtW$+Cl-1Ds,lij]h^}(%7bo>*l>');
define('LOGGED_IN_SALT',   'PGz.^Q64?;W?cii|j;:y48t6o_%*<s-X+&}mk-,fzJMlNiol-=a=-:-lH~g|X_&K');
define('NONCE_SALT',       'AjR^DAa43G>N6|W6T%bFS-5!40-xi*VvvWkhyU;ta=H2e_g,0Mg:|_|}W@qKBjkk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
