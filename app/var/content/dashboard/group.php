<h2>Groups </h2>


<?PHP
$dums = new Dums($db_host, $db_user, $db_passwd, $db_name);
$dums->add_group();
//$dums->list_group();
	include $GLOBALS['template'].'/dums/admin/listgroup.php';
?>






