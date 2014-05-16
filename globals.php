<?PHP 
/*  Dommert Enterprises Inc
	(C) Jan 2014 
	Site: DommertEnterprises.com
	
	Description: [globals.php]
	This is the setup file for system. Global variables and librarys
	Version 1.0.1
*/


// ===== Global Setup =========================
session_start(); // Start Sessions
$start = microtime(true);

// ----- Database Configs ---------------- 
$db_host = 'localhost';
$db_user = 'dev';
$db_passwd = 'D3v';
$db_name = 'test'; 
// ---------------------------------

// ----- Server Paths - Settings------------------

$GLOBALS['salt'] = "salt2342"; // SET SALT BEFORE INSTALL 
$GLOBALS['key'] = "key269";

$GLOBALS['dir'] = $_SERVER['DOCUMENT_ROOT'];
$GLOBALS['url'] = 'http://'.$_SERVER['HTTP_HOST'];
$GLOBALS['template'] = $dir.'/themes'; // Themes
$GLOBALS['content'] = $dir.'/var/content';
$GLOBALS['lib'] = $url.'/lib'; // Base Library URL
$GLOBALS['css'] = $url.'/themes/'.$theme.'/css/';
$GLOBALS['themes'] = $template.'/'.$theme;

// ==================================================
// ----- Site Information --------------
$site = array(
	'title' => 'Test System',
	'url' => 'http://dev.dommert.net/test/daddee',
	'description' => 'this is a website..',
	'author' => 'Dommert',
	'created' => 'jan-2014'
); 


// ------ Database Library -----------------
$lib_mysqli = $dir.'/lib/class.mysqli.php';
// ------- Librarys ------------------
$lib_main = $dir.'/lib/class.main.php'; // Main System Classes
$lib_dums = $dir.'/lib/dums/class.dums.php'; // DUMS Classes
// ------- JavaScript Libraries ----------------
$jquery = $lib.'/js/vendor/jquery.js';
$modernizr = $lib.'/js/vendor/modernizr.js'; 
$foundation = $lib.'/js/foundation.min.js';
$foundation_cdn = 'http://cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/foundation.min.js';


// *** LOAD Libraries *** 

// ---- Load Default Libraries 
require_once($lib_main);
require_once($lib_mysqli);
require_once($lib_dums);
//----- end defaults
//----- Load Plugins








