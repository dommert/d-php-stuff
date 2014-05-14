<?php
// DUMS V 1.0
// Login Page
// 

/* 
These need to be on the page calls:
$page['parent'] = 1;
$_POST['key'] = $GLOBALS['key'];
*/


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
