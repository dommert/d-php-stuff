<?PHP
$page['parent'] = 1;
//$_POST['usererrors'] = 'You Suck!';
IF (isset($_POST['submit']) AND isset($_POST['email']) AND $_POST['key'] = "key2693133")
	{
		$dums = NEW Dums($db_host, $db_user, $db_passwd, $db_name);
		//$dums->adduser();
		$dums->login(4);
	}
ELSE 
	{ 
		//include $dir.'/themes/dums/form_adduser.php';
		include $dir.'/themes/dums/form_login.php';
		
	}
echo '<PRE>'.print_r($_POST).'</PRE>';

?>