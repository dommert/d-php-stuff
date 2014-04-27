<?PHP 
IF (isset($page['parent'])) 
{
	?>

 <div class="large-6 large-centered columns">
 <fieldset >
    <legend>Add User</legend>
		<form data-abide method="post"> 

		<div class="email-field"> 
			<label>Email <small>required</small> 
			<input type="email" name="email"> 
			</label> 
		</div>

		<div class="name-field">
			<label>Password <small>required</small> 
			<input type="password" name="password"> 
			</label>
		</div>

		<div class="name-field">
			<label>First Name<small>required</small> 
			<input type="text" name="fname"> 
			</label>
		</div>

		<div class="name-field">
			<label>Last Name<small>required</small> 
			<input type="text" name="lname"> 
			</label>
		</div>
		<div>
		<button type="submit" name="submit" value="submit">Submit</button>
		</div>
	</form>
</fieldset>
</div>

<?
	}
ELSE 
{
	ECHO 'ERROR! No parent found...';
}
?>
