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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sample' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'nv%Kr1NypcVU#CZK@PAwUNw%TBdI1Aw,U?uSBo>[%o=dg`1Q8[?C7<[d^opb}7h2' );
define( 'SECURE_AUTH_KEY',  '^z;op{P>9y/OKx:jgIr+u42+mE?iR9_Bu^iJO8|ui.9-_Bz/iR[i-KYWgM?Eklrl' );
define( 'LOGGED_IN_KEY',    'I<& yYf}GKj@s{s*7MPyVl5G4e4BBYm/8`? 6<OVfe/%+tQbW}q?]S`Cyz6PE]]6' );
define( 'NONCE_KEY',        '^yv0bVE&z9Uod+VeYN=s$=LXA,<:r9Z|w!GLI>R#Z10|*lK;=k&.c(YS6+;], uy' );
define( 'AUTH_SALT',        'nj;Q>9quAQ@Eei6+!N_9LhUaK/Gf9C@K{kQF_!jh?16]r.,k:t9_)G3M.Z9^^8?-' );
define( 'SECURE_AUTH_SALT', 'bH~&/6aR%y_4db^/s/V+W<W*Wc+,[~Vz~5!82KR1)&sYH&Un?GeI8C-LW{ZZ#4CA' );
define( 'LOGGED_IN_SALT',   '&X=aLX;1V-]=,8e$S<wB_`lOH_,WuLz3d{TRW}UY+($ryk!tP3BxxyNyi>]v6PU6' );
define( 'NONCE_SALT',       'tE:@,e?:>3ZOABRe*ScCh5:@75[e~2AsLgLYOg$WU73)>m19d(}rlWSWotwJiUej' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
