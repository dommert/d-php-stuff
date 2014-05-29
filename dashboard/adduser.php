<?PHP
// Dommert Enterprises Inc
// (c) 2014
// Page Templates  V 1.0.1
//----------------------------------
// Admin Dashboard Template


// ------- Load Globals & Page Info
$page['title'] = "Default Template";
$theme = "dums"; //Required Theme (folder)
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  REQUIRE_ONCE($config); // Load Configs

  
//------------------------------

// -------- Content Section
$head = $themes.'/head.php'; 
$header = $themes.'/header.php';
 $nav = $themes.'/nav_main.php';
 $middle = $dir.'/var/dums/adduser.middle.php';
$footer = $themes.'/footer.php';
//--------------------------------
 
// ** Load the Template ** 
include $themes.'/main.php'; // Main Template [Default]

?>