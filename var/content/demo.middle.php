<h1> Middle Section </h1>
<?PHP

echo 'Start Test Code >>----><BR>';
$_POST['email'] = 'testing';
//'dommert@domain.com';
$dums = NEW Dums($db_host, $db_user, $db_passwd, $db_name);
$dums->adduser();

$db1 = NEW Database($db_host, $db_user, $db_passwd, $db_name);

 
//$db1->write("INSERT INTO test_table (title,data) VALUES (?,?)",
//	array("ss","test","testing344"));
$db1->read("SELECT * FROM test_table WHERE rid IN (8,9,10,11) ORDER BY date DESC");
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
