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
define('DB_NAME', 'divya_rashmi_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
 define('AUTH_KEY',         'Kl3GLG1IP6fPJIu_![z_Yp7,Ly:*xi*jUU?lH,v#DXB07OeZ%HXzY{^d-qR%Y[#|');
 define('SECURE_AUTH_KEY',  'ZEo(iE|R&/y`1_pKn<cY04c_,|p!NihYS*1i_P1f6QCh`8+ElMe%_FGb>~UV;|hI');
 define('LOGGED_IN_KEY',    ']I@Q9`SVrphZ-vaA;KYV0+7Z05v-d)I>aAkSu9d[<h<OU&jzd|JHlpk:Y GemA^o');
 define('NONCE_KEY',        'I$C ]ZC.n!+S{^F~iuk3e+?DP2-l5?@K|S}ac[QR]xk_yUJl6U06Kn?}~#L|`A:^');
 define('AUTH_SALT',        'C[;Hl}kZ,q)Oo+b}gf)!w)tL/aM8-lF<9-F5+et cb<u+oV4G0H;E-+77-hV}1JM');
 define('SECURE_AUTH_SALT', '6_kdMW48-(=Te!]6nC|n/@7~h?yQTOcOX@~@r1G3Hnz4@<{zvl]EC-%@-1tb}[n/');
 define('LOGGED_IN_SALT',   '32Z/VXdD!&A-Zh3S/LaY$sVvW?S*=&:)k@svP{w[!dY[:_`vup=}N!Dv{is6;FuJ');
 define('NONCE_SALT',       'n.DWLKb[8t7XL]y)y<ME&NCz}ZH{8bK/:u&{J>:@hFTW&B=RKX#,87l<g`lgS+.D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gl7a_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
