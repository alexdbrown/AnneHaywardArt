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
define('DB_NAME', 'hayward');

/** MySQL database username */
define('DB_USER', 'hayward');

/** MySQL database password */
define('DB_PASSWORD', 'sister');

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
define('AUTH_KEY',         '0%p7EkD,X+>sGH|B]Oy9SL0Ilz8+Bw $f/{S1H6|H|.4~? Q;bL!l+m7YQP#`,9e');
define('SECURE_AUTH_KEY',  'iZAS5<$hQ`g*@hF_IC-<ret/S_/)Q295;z$9?wiKu!1Wp_@ZV3C~%?Nu|@+T[~_7');
define('LOGGED_IN_KEY',    'O54T}!C:3LtOTJov[PbT<RW<Kc@kOBo{IvualqdctJjk+[.[i:`3[ggyulg56ZDH');
define('NONCE_KEY',        'Koh+nl7|))]UhH!mm->bK0!HL+/tJi?+qn^-~/?i0-2bZ:l-4DNyHk^av8#z~5|b');
define('AUTH_SALT',        ':&|iK|q<mMcYHP|L69,*N-*gc&KE5k+E^T?ln=|gsys;7aun>+!Gry^_MK$ZEg%|');
define('SECURE_AUTH_SALT', '|(aUtKIHGmN%RQ#| Wz;?3<pa)/IpY_J=C$%Z3PD%,hX,Q-RT]OzQscQ]NBhq2Y#');
define('LOGGED_IN_SALT',   'nR?4_@p}stDN3<1A+;lTqL!Z#@23Nrfh&qm+Amd2GX3|ys82k_t-I:Q5_D+.<XNQ');
define('NONCE_SALT',       '41[N?4m2),HvW6?2{]#CoxA-#q9!=^j .9{r;mA)ooYkC4A<A.u$zl|FgWFDlj(|');

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
