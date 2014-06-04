<?PHP 
IF ($page['parent'])
{
	$_POST['key'] = 'key2693133';
	// Form Key
?>

<!-- Add User Form -->
<Form method="post">
 <div class="large-6 large-centered medium-6 medium-centered columns">
 <fieldset >
    <legend>Add User</legend>
		<form data-abide method="post"> 
	<?PHP if (isset($_POST['usererror']))
	{ ?>
	<div data-alert="" class="alert-box alert round">
  	<?PHP echo $_POST['usererror']; ?>
  	<a href="" class="close">×</a>
	</div>
	<?PHP
	}
	 ?>	
		<div class="email-field" > 
			<label>Email <small>required</small> 
			<input type="email" name="email" value="<?PHP IF(ISSET($_POST['email'])) { echo $_POST['email']; }?>" required> 
			</label> 
		</div>

		<div class="name-field">
			<label>Password <small>required</small> 
			<input type="password" name="password" required> 
			</label>

		</div>

		<div class="name-field">
			<label>First Name <small>required</small> 
			<input type="text" name="fname" value="<?PHP IF(ISSET($_POST['fname'])) { echo $_POST['fname'];}?>" required> 
			</label>
		</div>

		<div class="name-field">
			<label>Last Name <small>required</small> 
			<input type="text" name="lname" value="<?PHP IF(ISSET($_POST['lname'])) { echo $_POST['lname'];}?>" required> 
			</label>
		</div>
		<div>
		<button type="submit" name="submit" value="submit">Submit</button>
		</div>
	</form>
</fieldset>
</div>
</Form>
<?
	}
ELSE 
{
    ECHO '
    <div data-alert="" class="alert-box alert round">
     ERROR: No Parent Found!<BR>
  	</div>';
}
?>
