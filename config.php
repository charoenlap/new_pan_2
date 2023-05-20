<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
//  error_reporting(0);
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// ini_set('memory_limit', '32M');
// ini_set('upload_max_filesize', '24M');
// ini_set('post_max_size', '32M');
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
// HTTP
define('HTTP_SERVER', 'http://43.229.77.178/~fsp56/uat_sporttown/');

// HTTPS
define('HTTPS_SERVER', 'http://43.229.77.178/~fsp56/uat_sporttown/');

// DIR
define('DIR_APPLICATION', '/home/fsp56/domains/fsp56.com/public_html/uat_sporttown/catalog/');
define('DIR_SYSTEM', '/home/fsp56/domains/fsp56.com/public_html/uat_sporttown/system/');
define('DIR_IMAGE', '/home/fsp56/domains/fsp56.com/public_html/uat_sporttown/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_DOWNLOAD2', '/home/fsp56/domains/fsp56.com/public_html/uat_sporttown/storage/download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'fsp56_town');
define('DB_PASSWORD', 'lwve5prY2');
define('DB_DATABASE', 'fsp56_town');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');