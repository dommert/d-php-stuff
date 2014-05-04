<?PHP

IF(isset($_POST['submit']))
{
	echo 'You submitted data!!';
	print_r($_POST);
	$db->write($_POST['var1'], $_POST['var2']);
}

?>


<form data-abide method="post"> 

<div class="email-field"> 
	<label>Email <small>required</small> 
	<input type="email"> 
	</label> 
</div>

<div class="name-field">
	<label>First Name <small>required</small> 
	<input type="text" name="var1" required pattern="[a-zA-Z]+"> 
	</label>
</div>

<div class="name-field">
	<label>Last Name <small>required</small> 
	<input type="text" name="var2" required pattern="[a-zA-Z]+"> 
	</label>
</div>

<div class="name-field">
	<label>Description  
	<textarea id="remarks" name="remarks" placeholder="Leave your remarks here."></textarea>
	</label>
</div>

<button type="submit" name="submit" value="submit">Submit</button>
</form>
