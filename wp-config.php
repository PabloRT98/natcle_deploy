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

define( 'WP_HOME', 'https://natcle.herokuapp.com/' );

define( 'WP_SITEURL', 'https://natcle.herokuapp.com/' );


define( 'DB_NAME', 'hgWDShF1sD' );


/** MySQL database username */

define( 'DB_USER', 'hgWDShF1sD' );


/** MySQL database password */

define( 'DB_PASSWORD', 'plzuhS2cnp' );


/** MySQL hostname */

define( 'DB_HOST', 'remotemysql.com' );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );




/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'Wc,]>@@)([c_/*vW`SkkdK&bDSe/.)s[Z)m&7Jew}YA.I3{T68-WcjoK4>XP*VwG' );

define( 'SECURE_AUTH_KEY',  'VQ1|KIy- FC-SV|FlGsS,0[txxFFel@puOfe8g3U<Cwsu2+x>X7rF_#`RIfDeJi<' );

define( 'LOGGED_IN_KEY',    '2n=<Hl#T80*49{|$!&tTo6q2G@}ce6-Bve<5EGF,?(l0]&EEoAz|}Tda*^deuB0+' );

define( 'NONCE_KEY',        'D[,TQ)i:YGJU_SS7yp35<Zw1>n7q_zdyOS,xvHm2=Qo.50eZ>|}^fI4UUI,c?gC{' );

define( 'AUTH_SALT',        'XwD(!71X/EN;J7M+9E}AB-)epu230A>t1OF9LFtYNwUR>_MK?X}I<.mZi-A@Pek@' );

define( 'SECURE_AUTH_SALT', 'qcTvx<H>_)V9$$1A0cR#5r/_#i&f@>:qj|*X ^Ko>C1,F*0vX=-iqHrF%kh38Dl}' );

define( 'LOGGED_IN_SALT',   'S/1r=N$$}OFPMaRVf^bz~qBq1C:16ofQJ)4hN,Z2Szw {`34qVat&MajoZd @=e@' );

define( 'NONCE_SALT',       ' .b4]-B%9r);]XGx&*d=A_ l.Oh[rR]#N@EG7>ze&% Q45;v$@#>0akUY9DD/:8P' );

define ('WP_MEMORY_LIMIT', '300M');


/**#@-*/


/**

 * WordPress Database Table prefix.

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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define ('WP_DEBUG', true);

define ('WP_DEBUG_LOG', true);

define ('WP_DEBUG_DISPLAY'. false);

@ini_set ('display_errors', 0);


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

