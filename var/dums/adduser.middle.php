<div>
	<h2> Add User </h2>
	<P>
		Add User
	</p>
	<?PHP 
	$page['parent'] = TRUE;
	$dums = new Dums($db_host, $db_user, $db_passwd, $db_name);
	$dums->adduser();
	
	?>
</div>
