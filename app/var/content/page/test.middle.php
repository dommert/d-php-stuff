<?PHP
// Demo Data
?>

 <h1>middle</h1>


<?PHP  
echo $_GET['page'];
$db1 = new Database($db_host, $db_user, $db_passwd, $db_name);
$dbtest = $db1->read('SELECT * FROM test_table LIMIT 0, 10');
/*
foreach ($data as $value) {
  $val[] = $value;
}
*/
//$val[] = $data;
//unset($data);
echo '------'. $dbtest['0']['title'];
echo "<PRE>";
  print_r($dbtest);
echo "</PRE>";

$mysqldate = date('m/d/Y D @ h:m:s A',strtotime($dbtest[3]['date']) );
echo $mysqldate . '<BR>';

$a3 = $db1->read('SELECT * FROM url');

$rowtest = $db1->numrows('SELECT * FROM url');
echo "Row Count is $rowtest";
if ($rowtest > 1)
{
  echo "<BR> TRUE <BR>";
}

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
     //print_r($r);
    ?>

  </pre>


  
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


