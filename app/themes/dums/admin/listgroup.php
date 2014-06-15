


<BR>
<div id="listgroup" class="medium-12 columns">
<h5>List Group</h5>
	<ul class="small-block-grid-3">
	<?PHP 			
	$list = new Dums($db_host, $db_user, $db_passwd, $db_name);
	$list->Read('SELECT * FROM groups');
		foreach ($data as $r ) 
		{

			echo '<LI>'. $r['group_name'] . '</LI>';
		}
	?>

	</ul>
</div>