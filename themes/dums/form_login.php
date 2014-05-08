<?PHP 
IF (isset($page['parent'])) 
{

?>

<!-- DUMS Login Form  -->

<form method="post">
<div class="row">
 <div class="large-6 small-6 large-centered small-centered columns">
 <fieldset >
    <legend>Login</legend>
		<form data-abide method="post"> 


	<?PHP // ERROR BOX 
	if (isset($_POST['usererror']))
	{ ?>
	<div data-alert="" class="alert-box alert round">
  	<?PHP echo $_POST['usererror']; ?>
  	<a href="" class="close">×</a>
	</div> 
	<?PHP } ?>		
	
		<div class="email-field"> 
			<label>Email <small>required</small> 
			<input type="email" name="email" required> 
			</label> 
		</div>

		<div class="name-field">
			<label>Password <small>required</small> 
			<input type="password" name="password" required> 
			</label>
		</div>
		<div>
		<button type="submit" name="submit" value="submit">Submit</button>
		</div>
		</form>
</fieldset>
</div>
</div>
</form>

<?PHP 
}
ELSE
{
	ECHO '<div data-alert="" class="alert-box alert round">
    ERROR: No Parent Found!<BR>
  	</div>';
}
?>