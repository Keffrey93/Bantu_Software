<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Lt03HmtGVOwCxNFt5KtU04Yy8onXa2WKOhtwr5Yeg8TAVRs9kwEAJt0eOFRbV9x0SfPr852EllvwgZr5ynOW5w==');
define('SECURE_AUTH_KEY',  'DZ2oM6hJYhILlH8ptST/sKD34CVJsAq1D93LvEwBjkwWTimZx6r1c9bCQRll47uwJoEiJWQV7MjaPr9N9RBdOw==');
define('LOGGED_IN_KEY',    'pTNDS4ldk8c/CUvRnGcavJ2IYk5we/sPfS/VlivuSTMPzZ6b0g+K01POeIesD4yxR+2H+xJa5H9Um1gm6sNfHg==');
define('NONCE_KEY',        'NWb0c623/rD2/3yj5NoXfVn2CasXMpwHU9CHXMS2nLp6GlIso7j2umO4s0A4NJatWAnLEsXWBTsXC2q0GjRgRw==');
define('AUTH_SALT',        '2Mci9jdGiG1MU5optNf8dLRRKxefzN76z/pXRu1tuI0CyxmRHEW0J7MgE0sUTm2rX8e81bzYOAu9rl5bXiTaVg==');
define('SECURE_AUTH_SALT', 'zX8myZ5xf6Tq6T5/bJwdRu8cR/0hQ4vy0cRBI0tXmGysnaYKw3vuB/+K5wHN/fHXQYNEqC7oXWNqI8l1xwAvcw==');
define('LOGGED_IN_SALT',   'wANw9gBq9xNqR9/RI8Mt9PE6PHVVmn5KARQSs/XkGs2ag/QsYBxE4c7Hgj5wVcxbN5u6czyclfAtm9lKacDSVQ==');
define('NONCE_SALT',       'BS3j8Iw5ZFW9qGNMuw2jWlP/nxcmc96hnjw2M130RWxg3JAJlDE2saoc5fBniQ6W0scwJNBGQhux0Wf+3OuYAQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
