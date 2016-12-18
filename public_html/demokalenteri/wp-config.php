<?php
require_once( dirname(dirname(__DIR__)). '/demokalenteri-conf/vendor/autoload.php' );
require_once( dirname(dirname(__DIR__)). '/demokalenteri-conf/config.php' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
