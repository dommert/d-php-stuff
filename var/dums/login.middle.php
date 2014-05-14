<?PHP
$page['parent'] = TRUE;
$_POST['key'] = $GLOBALS['key'];
IF ($_POST['key'] != $GLOBALS['key'])
{
	$_POST['usererror'] = "You dont have the correct key!";
}

IF (isset($_POST['submit']) AND isset($_POST['login']))
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
//echo '<PRE>'.print_r($_POST).'</PRE>';

?>