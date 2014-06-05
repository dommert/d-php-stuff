<div>
<h2> Object </h2>
<P> Object Page..... </P>
</div>

<?PHP 
//if ($_SESSION['admin'] == 1)
//{
require_once($lib_daddee);

	if ($_GET['type'] == "add")
	{
		$daddee = NEW Daddee($db_host, $db_user, $db_passwd, $db_name);
		$daddee->add_object();
	}

	IF ($_GET['type'] == "edit" && isset($_GET['id']))
	{

	}
//} 
//ELSE MainClass::error("You do not have permission!");
