
<!-- TEMPLATE (main)  v1.0 -->
<!doctype html>
<html class="no-js" lang="en">
  <head>
      <?PHP include $head; ?>
  </head>
<body>

  <header>     
    <div class="row">
      <div class="large-12 columns">
        <?PHP include $header; ?>
      </div>
    </div>
  </header>

  <div id="middle"> 
     <div class="row">
     <div class="large-12 columns">
      <?PHP include $middle; ?>
    </div>
  </div>
</div>
 
  <footer>
    <div id="middle"> 
    <div class="row">
      <div class="large-12 columns">
        <?PHP include $footer; ?>
      </div>
    </div>
  </div> 
  </footer>
  
<?PHP  
// Include JavaScript
INCLUDE $template.'/foundation_js.php'; // Foundation
?>


</body>
</html>