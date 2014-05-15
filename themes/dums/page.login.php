<?php
// DUMS V 1.0
// Login Page
// 

/* These need to be on the page calls:
$page['parent'] = TRUE;
$_POST['key'] = $GLOBALS['key'];
*/
$attempts = 5;

IF (isset($_SESSION['logon'])) 
{ 
	$redirect = $url;
	Header("Location: $url/dashboard"); }

IF ($_POST['key'] != $GLOBALS['key'])
{
	$_POST['usererror'] = "You dont have the correct key!";
}

IF (isset($_POST['submit']) AND isset($_POST['login']))
	{
		$dums = NEW Dums($db_host, $db_user, $db_passwd, $db_name);
		$dums->login($attempts);
	}
ELSE 
	{ 
		IF ($_SESSION['attempt'] < $attempts)
		{ include $dir.'/themes/dums/form_login.php'; }
		ELSE 
		{ MainClass::error('To many login attempts!'); }
	}