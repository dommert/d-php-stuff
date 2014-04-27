<?PHP
// Dommert Enterprises Inc
// (c) 2014
//----------------------------------

// Demo Template One column

// ------- Load Globals & Page Info
$page['title'] = "DEMO";
$page['parent'] = "1";
$theme = "default"; //Required 
  $config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  //$config = __DIR__ . '/globals.php';
REQUIRE_ONCE($config);
    // Check Login Routine
$template = $themes.'/'.$theme;
//------------------------------

// -------- Content Section
$head = $template.'/head.php'; 
$header = $template.'/header.php';
$nav = $template.'/nav_main.php';
$middle = $content.'/demo_dat.php';
$footer = $template.'/footer.php';
//--------------------------------

// ** Load the Template ** 
include $template.'/main.php';

?>







