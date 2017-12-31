<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db-files-upload');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('APP_DEBUG', FALSE);

//define('APP_DEBUG', TRUE);

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__));

define('APP_NAME', '');
    
session_start();

require_once(ABSPATH . '/code/system/db_helper/shared/ez_sql_core.php');
require_once(ABSPATH . '/code/system/db_helper/mysqli/ez_sql_mysqli.php');
require_once(ABSPATH . '/code/system/web-helper.php');

require_once(ABSPATH . '/filter.php');

?>