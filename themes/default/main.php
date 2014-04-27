<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
<?PHP
// Dommert Enterprises Inc
// (c) 2014

// Page Info
$page['title'] = "DEMO";
$page['parent'] = "1";
$theme = "default";
// Load Global Configs & Libraries
$config = $_SERVER['DOCUMENT_ROOT'].'/test/daddee/globals.php';
REQUIRE_ONCE($config);

// Check Login

?> 

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?PHP ECHO $site['title'] . ' - ' . $page['title']; ?></title>
  <link rel="stylesheet" href="<?PHP ECHO $css.'foundation.css'; ?>" />
  <script src="<?PHP ECHO $modernizr; ?>"></script>
</head>

<body>
  
  <header>     
    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to Foundation</h1>
          
          <nav class="top-bar" data-topbar> 
            
            <ul class="title-area"> 
              <li class="name"> <h1><a href="#">Domain</a></h1> </li> 
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
<<<<<<< HEAD
=======

<!-- TEMPLATE -->
<!doctype html>
<html class="no-js" lang="en">
  <head>
      <?PHP     
      include $head;
      ?>
  </head>
<body>

  <header>     
    <div class="row">
      <div class="large-12 columns">
        <?PHP include $header; ?>
>>>>>>> EOD 4/26
=======
>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
      </div>
    </div>
  </header>

  <div id="middle"> 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
   <div class="row">
    <div class="large-12 columns">
    <h1>middle</h1>
  </div>
    </div>
  </div>
<<<<<<< HEAD
=======
    <div class="row">
     <div class="large-12 columns">
      <?PHP 
        include $middle;
      ?>
    </div>
  </div>
</div>
  
>>>>>>> EOD 4/26
=======
>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
  <footer>
    <div id="middle"> 
    <div class="row">
      <div class="large-12 columns">
<<<<<<< HEAD
<<<<<<< HEAD
        <h1>footer</h1>

=======
        <?PHP include $footer; ?>
>>>>>>> EOD 4/26
=======
        <h1>footer</h1>

>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
      </div>
    </div>
  </div> 
  </footer>
  
  
  
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
  <script src="<?PHP ECHO $jquery;?>"></script>
  <script src="<?PHP ECHO $foundation;?>"></script>
  <script>
    $(document).foundation();
  </script>
<<<<<<< HEAD
=======
<?PHP  
// Include JavaScript
INCLUDE $template.'/foundation_js.php'; // Foundation
?>
>>>>>>> EOD 4/26
=======
>>>>>>> 06891f16d91c93b5689ee44e4eb3ac6524c82fec
</body>
</html>