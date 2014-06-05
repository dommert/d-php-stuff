<div>
<h2> Object </h2>
<P> Object Page..... </P>
</div>

<?PHP 
//if ($_SESSION['admin'] == 1)
//{
	if ($_GET['type'] == "add")
	{
		include $content.'/object/form.object.php';
	}

	IF ($_GET['type'] == "edit" && isset($_GET['id']))
	{

	}
//} 
//ELSE MainClass::error("You do not have permission!");
