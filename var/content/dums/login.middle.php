<?PHP
//$_POST['usererrors'] = 'You Suck!';
IF ($_POST['submit'])
	{
		Echo 'Login Attempt';
	}
ELSE 
	{ 
		include $dir.'/themes/dums/form_login.php';

	}
echo '<PRE>'.print_r($_POST).'</PRE>';

?>