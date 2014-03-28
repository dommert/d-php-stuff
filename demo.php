<?PHP
// Dommert Enterprises Inc
// (c) 2014

$config = $_SERVER['DOCUMENT_ROOT'].'/test/daddee/globals.php';
REQUIRE_ONCE($config);

$page = "DEMO";
$page['parent'] = '1';
// Check Login


?> 

<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?PHP ECHO $site['title'] . ' ' . $page; ?></title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="<?PHP ECHO $modernizr; ?>"></script>
</head>
<body>
  <header>     
    <div class="row">
      <div class="large-12 columns">
        
        <h1>Welcome to Foundation</h1>
        <nav class="top-bar" data-topbar> 
          <ul class="title-area"> 
            <li class="name"> <h1><a href="#">Domain.com</a></h1> </li> 
            <li class="toggle-topbar menu-icon"><a href="#">HOME</a></li>
          </ul> 
         
          <section class="top-bar-section"> 
      <!-- Right Nav Section --> 
            <ul class="right"> 
              <li class="active"> <a href="#">Right Button</a></li> 
                <li class="has-dropdown"> <a href="#">Admin</a> 
                <ul class="dropdown"> 
                  <li><a href="#">Users</a></li>
                  <li><a href="#">Objects</a></li>
                  <li><a href="#">Files</a></li>
                  <li><a href="#">Links</a></li> 
                </ul> 
            </ul> 
      <!-- Left Nav Section --> 
            <ul class="left"> 
              <li><a href="#">HOME</a></li> 
              <li><a href="#">Shared</a></li> 
              <li><a href="#">Settings</a></li> 


            </ul> 
          </section> 
        </nav>
      </div>
    </div>
  </header>
  <div id="middle"> 
    <div class="row">

<?PHP  

$db1 = new Database($db_host, $db_user, $db_passwd, $db_name);
$dbtest = $db1->read('SELECT * FROM test_table');
/*
foreach ($data as $value) {
  $val[] = $value;
}
*/
//$val[] = $data;
//unset($data);

echo "<PRE>";
  print_r($dbtest);
echo "</PRE>";

$mysqldate = date('m/d/Y D @ h:m:s A',strtotime($dbtest[3]['date']) );
echo $mysqldate . '<BR>';

$a3 = $db1->read('SELECT * FROM url');
echo 'The data is: ' . $a3[0]['uri'];

/*
include('themes/dums/login_form.php'); 
$a = 'themes/dums/form_adduser.php';
  include($a);
*/
?>

  <pre>
    <?PHP 
     print_r($a3);
     print_r($r);
    ?>

  </pre>

  <div class="large-12 columns">
    <h1>middle</h1>
  <?PHP 
  /*
include('demo.dat.php'); 
$db = NEW Test; 
// include('form.php');
$db->read("SELECT * FROM test_table");
echo 'testing: ' . $rows[7]['title'];
echo '<BR>' . $rows[7]['date'];
$db->close();
*/
  ?>



      </div>
    </div>
  </div>
  <footer>
    <div id="middle"> 
    <div class="row">
      <div class="large-12 columns">
        <h1>footer</h1>

      </div>
    </div>
  </div> 
  </footer>
  
  
  
  <script src="<?PHP ECHO $jquery;?>"></script>
  <script src="<?PHP ECHO $foundation;?>"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>





