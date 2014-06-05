<?PHP if ($_SESSION['admin'] == 1)
{ ?>


<div>
<h2> Admin Panel </h2>
<p> Welcome to the Admin Panel. </p>
</div>

<? }
ELSE 
	MainClass::Error("Admins Only");
	?>
	