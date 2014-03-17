<?PHP 
/*  Dommert Enterprises Inc
	(C) Jan 2014 
	Site: DommertEnterprises.com
	
	Description: [globals.php]
	This is the setup file for system. Global variables and librarys
*/


// Global Setup =========================


// Site Information
$site = array(
'title' => 'Daddee',
'url' => 'http://dev.dommert.net/test/daddee',
'description' => 'this is a website..',
'author' => 'Dommert',
'created' => 'jan-2014'
); 

// Server Paths ------------------
$dir = $_SERVER['DOCUMENT_ROOT'].'/test/daddee';
$url = 'http://'.$_SERVER['HTTP_HOST'].'/test/daddee';
$templates = $dir.'/templates';

// Database -----------------
$lib_mysqli = $dir.'/etc/mysqli.config.php';

// Librarys ------------------
$lib = $url.'/lib/'; // Base Library URL
//$lib = '/home/dev/test/daddee/lib/';
$lib_main = $lib.'class.main.php'; // Main
$lib_dums = $lib.'dums/class.dums.php'; // DUMS
// JavaScript ----------------
$jquery = $lib.'js/vendor/jquery.js';
$modernizr = $lib.'js/vendor/modernizr.js'; 
$foundation = $lib.'js/foundation.min.js';
//$foundation = 'http://cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/js/foundation.min.js'
?>
