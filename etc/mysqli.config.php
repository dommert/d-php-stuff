<?PHP
// MYSQLi Database 
// Dommert Enterprises Incorporated 
// 
// version b 1.0 
//-----------------------------------------------------


// Database Configs 
$db_host = 'localhost';
$db_user = 'dev';
$db_passwd = 'D3v';
$db_name = 'test';

// Connect to Database
$mysqli = new mysqli($db_host, $db_user, $db_passwd, $db_name);
	if (mysqli_connect_errno())
	{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}





?>
