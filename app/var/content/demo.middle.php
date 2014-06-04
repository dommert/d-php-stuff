<h1> Middle Section </h1>
<?PHP
echo MainClass::datetimestamp() . "<BR>";
echo '<BR> Start Test Code >>----><BR>';

//$dums = NEW Dums($db_host, $db_user, $db_passwd, $db_name);
//$dums->adduser();
//$dums->login(4);

$page['parent'] = TRUE;
$_POST['key'] = $GLOBALS['key'];
include $template.'/dums/page.login.php';

// $joindate = date('Y-m-d');
// $ab = "UPDATE user SET join = ?, status = ?, group = ? WHERE email = '$email'"
//$dums->write($ab, array("sss", "$joindate", "1", "$group"));

$db1 = NEW Database($db_host, $db_user, $db_passwd, $db_name);



 //$sql = "INSERT INTO test_table (title,data) VALUES (?,?)";
//$db1->write($sql, array("ss","test","testing344"));
//$db1->read("SELECT * FROM test_table WHERE rid IN (8,9,10,11) ORDER BY date DESC");
$db1->read("Select * FROM test_table LIMIT 20");
echo "<PRE>";
print_r($data);
echo "</PRE>";
echo 
<<<HTML
<table> 
	<thead> 
	<tr> 
		<th width="200">Date</th> 
		<th>Title</th> 
		<th width="150">Data</th> 
	</tr> 
	</thead> 
	<tbody> 
		
HTML;


	foreach ($data as $row)
	{
	echo "<tr> <td>".$row['date']."</td> 
		<td>".$row['title']."</td> 
		<td>".$row['data']."</td> 
	</tr> ";
	
	}


ECHO "</tbody> </table>";

?>
