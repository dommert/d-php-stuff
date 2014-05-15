<?PHP
// ------- Load Globals & Page Info
$page['title'] = "Default Template";
$theme = "default"; //Required Theme (folder)
$config = $_SERVER['DOCUMENT_ROOT'].'/globals.php';
  REQUIRE_ONCE($config); // Load Configs

  
//------------------------------
MainClass::logout();
?>
