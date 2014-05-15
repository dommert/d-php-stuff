<?PHP
// Dommert Enterprises Inc
// (c) 2014
// Page Templates  V 1.0.1
//----------------------------------
// Login Template

// *** DUMS One Column Template

// ------- Load Globals & Page Info
$page['title'] = "Login Page";
$theme = "default"; //Required Theme (folder)
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  REQUIRE_ONCE($config); // Load Configs

IF (!isset($_SESSION['logon']))
{
  	// Permissions
//------------------------------
$page['parent'] = TRUE;
$_POST['key'] = $GLOBALS['key'];
// -------- Content Section
$head = $themes.'/head.php'; 
$header = $themes.'/header.php';
$nav = $themes.'/nav_main.php';
$middle = $template. '/dums/page.login.php';
$footer = $themes.'/footer.php';
//--------------------------------

// ** Load the Template ** 
include $themes.'/main.php'; // Main Template
}
ELSE
{
	header("Location: $url/dashboard");
}
?>


