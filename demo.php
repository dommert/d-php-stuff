<?PHP
// Dommert Enterprises Inc
// (c) 2014

//----------------------------------
// beta templates

// Demo Template One column

// ------- Load Globals & Page Info
$page['title'] = "DEMO Page";
$page['parent'] = "1";
$theme = "default"; //Required Theme (folder)
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  //$config = __DIR__ . '/globals.php';
  REQUIRE_ONCE($config); // Load Configs & Libraries
// Check Login Routine
//------------------------------

// -------- Content Section
$head = $template.'/head.php'; 
$header = $template.'/header.php';
$nav = $template.'/nav_main.php';
$middle = $content.'/demo.dat.php';
$footer = $template.'/footer.php';
//--------------------------------

// ** Load the Template ** 
include $template.'/main.php'; // Main Template

?>





