<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
// 
// error_reporting(0);
// ini_set('display_errors', 0);
// ini_set('post_max_size', '999M');
ini_set('memory_limit', '1024M');

// HTTP
define('HTTP_SERVER', 'http://pan-thailand.com/admin/');
define('HTTP_CATALOG', 'http://pan-thailand.com/');

// HTTPS
define('HTTPS_SERVER', 'http://pan-thailand.com/admin/');
define('HTTPS_CATALOG', 'http://pan-thailand.com/');

// DIR
define('DIR_APPLICATION', 'C:/MAMP/htdocs/new_pan_2/admin/');
define('DIR_SYSTEM', 'C:/MAMP/htdocs/new_pan_2/system/');
define('DIR_IMAGE', 'C:/MAMP/htdocs/new_pan_2/image/');
// define('DIR_STORAGE', 'C:/MAMP/htdocs/new_pan_2/system/storage/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', 'C:/MAMP/htdocs/new_pan_2/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
// define('DIR_UPLOAD2', DIR_STORAGE2 . 'upload/');
// echo DIR_STORAGE;

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'fsp56_town');
define('DB_PASSWORD', 'lwve5prY2');
define('DB_DATABASE', 'fsp56_town');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
// OpenCart API
