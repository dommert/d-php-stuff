<?PHP 
// Global Setup


// Info
$site = array(
'title' => 'Daddee',
'url' => 'http://dev.dommert.net/test/daddee',
'description' => 'this is a website..',
'author' => 'Dommert',
'created' => 'jan-2014'
); 

// Paths
$dir = $_SERVER['DOCUMENT_ROOT'].'/test/daddee';
$url = $_SERVER['HTTP_HOST'] . '/test/daddee';
$templates = $dir.'/templates';

// Database
	$lib_mysqli = $dir.'/etc/mysqli.config.php';

// Librarys
//-------------------
	$lib = $dir.'/lib/';
$lib_main = $lib.'class.main.php'; // Main
$lib_dums = $lib.'dums/class.dums.php'; // DUMS
// JavaScript
$js = $lib.'js/jquery-1.11.0.js';
$modernizr = $lib.'vendor/modernizr.js';
// Foundation
$foundation = $lib.'foundation.min.js';

?>
