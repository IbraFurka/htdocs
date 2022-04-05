<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
// HTTP
define('HTTP_SERVER', 'http://localhost/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/');

// DIR
define('BASE_DIR', dirname(__DIR__));
define('APP_DIR', __DIR__);
define('DIR_APPLICATION', APP_DIR.'/catalog/');
define('DIR_SYSTEM',  APP_DIR.'/system/');
define('DIR_IMAGE',  APP_DIR.'/image/');
define('DIR_STORAGE', BASE_DIR.'/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'cucucomt_database');
define('DB_PORT', '8889');
define('DB_PREFIX', 'oc_');