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
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'dbpws');

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
define('AUTH_KEY',         'ZLH|<e2<UnjuHyF@VBfg:ceFXvX[b:3f9u v$rm%/FW0dCVK#s%c4SE&%?og%~0G');
define('SECURE_AUTH_KEY',  'Yb=@^AWP~/je)u) b|h[)a5;I6cDQ,LrFTwNfv%A}]{Krl7xd?,2PxpUa xx*=}A');
define('LOGGED_IN_KEY',    'ow@E0UcA!g;%LtN^LN__}KF(#M(yltWgY$.ggW7W,5Z=a=$9>/?wAy`H/?PUpD<3');
define('NONCE_KEY',        '&_[|yD7&V#OJ+Wlm<Q&E}aPI<r++bUjqf|v:`_nh:AXD=Srz#v^en2/[_c%&-<U!');
define('AUTH_SALT',        '+tvMJslG ky5h@-,f@9YS}WP,27q/#B>+m3>U#5%j^R7rzCW|K?A.`9}~NFkkASA');
define('SECURE_AUTH_SALT', 'AD.@=E/=gpZk>B5E$~H!:`M4p2[*F,|yn(K: M(nK;~DcK{}u{I*_!n@`|<[$a6&');
define('LOGGED_IN_SALT',   '*pAX.UdvyU{,yw||n_^P.sK@7ixv?(2N#2LGk~f0XZ/!(Ns)59Fek:mVRQHgrM5n');
define('NONCE_SALT',       'LoUH k,2&9nOf$-4|KKhAeP0gFlv.]a??2=PANp%g(C3NrTpbL &W3!j@Y1vQC[w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

$site_url = 'http://example.com/demokalenteri';

define( 'WP_SITEURL', $site_url.'/wp' );
define( 'WP_HOME', $site_url );

/**
 * Custom content dir
 */
define( 'WP_CONTENT_DIR', dirname( __DIR__ ) . '/public_html/demokalenteri/app' );
define( 'WP_CONTENT_URL', $site_url.'/app' );


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
// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_LOG', true );
