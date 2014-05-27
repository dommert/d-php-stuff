<?PHP

$db1 = NEW Database($db_host, $db_user, $db_passwd, $db_name);
$idc = $db1->unique_check('test_table','data',1);
$i = 1;
WHILE ($idc == FALSE)
{ 
	 echo "FAILURE!! ".$idc;
	 unset($idc);
	 $idc = $db1->unique_check('test_table','data',1,1);
	 IF ($i == 20)
	 {
	 	ECHO "ID FAILED! ";
	 	$f = TRUE;
	 	break;
	 }
	 $i++;
}

	IF ($f != TRUE)
	{
		echo $idc . " worked";
		$db1->query("INSERT INTO test_table (data) VALUES ('$idc')");  
	}	

	?>
