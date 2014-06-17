
<?PHP
// Dommert Enterprises Inc
// (c) 2014

//----------------------------------
// beta templates

// Demo Template One column

// ------- Load Globals & Page Info
$page['title'] = "DEMO Page";
$page['parent'] = "1";
$theme = "dums"; //Required Theme (folder)
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  //$config = __DIR__ . '/globals.php';
  REQUIRE_ONCE($config); // Load Configs & Libraries
// Check Login Routine
  MainClass::require_login();
//------------------------------

// -------- Content Section
$head = $themes.'/head.php'; 
$header = $themes.'/header.php';
$nav = $themes.'/nav_main.php';
$middle = $content.'/dashboard/group.php';
$footer = $themes.'/footer.php';
//--------------------------------

// ** Load the Template ** 
include $themes.'/main.php'; // Main Template

?>













