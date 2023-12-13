<?php 
/*
 * Basic Configurations
 * Author Viggie <viggie@viggie.com>
 * 
 */
// Redirect if accessed this file directly
if (strstr($_SERVER["PHP_SELF"], "/base-config.php")) {
    header("Location: index.php");
}

// Basic Config
define('VIVEY', 'Vivey');
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', __DIR__.DS);
define('CONTENT_PATH', BASE_PATH.'content'.DS);
define('SOURCE', BASE_PATH.'src'.DS);
define('JSON_PATH', CONTENT_PATH.'json'.DS);

// Domain and protocol
define('DOMAIN', $_SERVER['HTTP_HOST']);
if (!empty($_SERVER['HTTPS'])) {
	define('PROTOCOL', 'https://');
} else {
	define('PROTOCOL', 'http://');
}

// Base URL
$base = '';
if (!empty($_SERVER['DOCUMENT_ROOT']) && !empty($_SERVER['SCRIPT_NAME']) && empty($base)) {
	$base = str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_NAME']);
	$base = dirname($base);
} elseif (empty($base)) {
	$base = empty( $_SERVER['SCRIPT_NAME'] ) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
	$base = dirname($base);
}
if (strpos($_SERVER['REQUEST_URI'], $base)!==0) {
	$base = '/';
} elseif ($base!=DS) {
	$base = trim($base, '/');
	$base = '/'.$base.'/';
} else {
	$base = '/';  // Workaround for Windows Servers
}
define('BASE_URL', $base);
define('NOT_FOUND',SOURCE.'404.php');

// Get json values in array from php files
function json2array($file) {
	// Get Page list
	$jsonvalues = file(JSON_PATH.$file);
	// remove php security code in file
	unset($jsonvalues[0]);
	$jsonvalues = implode($jsonvalues);

	return json_decode($jsonvalues, true);
}