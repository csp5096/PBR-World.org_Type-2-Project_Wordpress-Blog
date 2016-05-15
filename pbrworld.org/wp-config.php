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
define('DB_USER', 'ubuntu');

/** MySQL database password */
define('DB_PASSWORD', 'wDvCYQAp7M45W5Up');

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
define('AUTH_KEY',         'i[1U,F#(4%XZi n)#aSCwo`{MEt7>jMg([Wsc8+gkwx[Q`18k(&+OBD>eHI(te>o');
define('SECURE_AUTH_KEY',  'jrJScOM9g<-8za%Z{.<@?xGe;(RO5jR!#Zd6/W;#< {;ZRJno+O+~5aP3zCPv.wF');
define('LOGGED_IN_KEY',    '/v(yqRIgc;i&$!mNAHxI2m=>!!p$j6_HyYY,#sYi!JHn4CfbCo/14n?[cCYXW(9^');
define('NONCE_KEY',        '+GHNLU82tL75tfHAAk+{?27/H,<6CX_eRCpp>ul0q>uL~k*gHVR[]OcT 0y*8O2J');
define('AUTH_SALT',        'iRAc!Mx^aP=uCk8l$&E4%sf A$n+!*RI5up<GSbF$%UAUXk7ACU!GNwE^~``GBr/');
define('SECURE_AUTH_SALT', '6GGB,s,y.WExYwN~O9m3y79[&zm8j8+P4+LHKuo:vW34g#*0A.~&`em3k-UcS^JR');
define('LOGGED_IN_SALT',   '5.ilZ:mt<d(p:}sCE_+>cSBD).A.}J]l)8NAqtzMhVKj90KUlb-Nc:Qp_Sd~-x`~');
define('NONCE_SALT',       ',..#Nv^6}x/C9sI!ifE ]TF}}%9-W_HIeUBOfwcwwEKthm$Z5y<YS|[u-mgI=~`S');

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

