<div>
	<h2> Add User </h2>
	<P>
		Add User
	</p>
	<?PHP 
	$page['parent'] = TRUE;
	if ($_SESSION['admin'] == 1)
	{
		$dums = new Dums($db_host, $db_user, $db_passwd, $db_name);
		$dums->adduser();
	} 
	ELSE 
	MainClass::error("You are not allowed to access this page. Admin's Only!");
	
	?>
</div>
