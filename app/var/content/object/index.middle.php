<?php
$daddee = NEW Database($db_host, $db_user, $db_passwd, $db_name);
$id = $_GET['id'];

if (isset($id))
{
$object = $daddee->Read("SELECT * FROM object WHERE object_id = '$id'");



?>

<!-- Object Profile -->
<div class="medium-4 columns">
<P><BR>
<img src="http://placekitten.com/200/200" class="round">
</P>
<P class="panel">
Title: <?=$object[0]['title'];?> <BR>
Added: <?PHP echo date("Y-m-d h:i:sa", $object[0]['date']);?> <BR>
</P>
</div>
<div class="medium-8 columns">
<h2> 
	<?=$object[0]['name'];?> 
</h2>
<P> 
	<?=$object[0]['description'];?>
</P>
</div>
<div class="medium-12 columns">

<?PHP
}
ELSE MainClass::Error("Needs a ID Number!");

if (isset($_SESSION['logon']))
{
	$file = $content.'/object/object.file.php';
	include($file);
}