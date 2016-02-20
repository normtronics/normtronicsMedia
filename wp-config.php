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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '}3 /*9X2+ZW3i+J}0_=Rf]Ql)-L@ngZZ:H]Jd%]ind&^G*e8A~pJK79R1Q@Rnac2');
define('SECURE_AUTH_KEY',  '<x^<*{PwQK`&J3Q)iaN+wnF+cdL~sq&X(7$:i`X_yZC+G|jjG3~]!!L1Pn>{L;~&');
define('LOGGED_IN_KEY',    'r&)-!=di~yPoj YM8hywt7;_YL.u>OTNyl86-{&x.Y=QLSA--.On[c-9{.U_1od(');
define('NONCE_KEY',        '!v#[jjS%BaJhX};q@mcrfT3(+3i%$7aWk,Utx|fDy3~,@$hhOw$d2-9|#M)Re$Zs');
define('AUTH_SALT',        '^K1;Bd?V)F=.Qt]pmPoXpyclUk5+wZ.+^M/g:Y.nm?/&>[_|:^ZC|pod_+iQ|:f3');
define('SECURE_AUTH_SALT', 'eZI3de(cZ <1?Uyt=[.dV8(]C%<vjKtSg;)`~Toe4hAZE{.lV1uA]x6_xNQdaV{u');
define('LOGGED_IN_SALT',   'od}nP3FZ>:|Z_QdXz*%uD8*Hnf2U`!,$o+G,/u0J+|p|IK,{ab6Cougzpq3n>V%?');
define('NONCE_SALT',       'CWG]{xk=)PTs-)pyk9O4-6cr_!?VLmMVk+D;//mo!GL4.{O+waLX+V]OSO!`cp/l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
