<!-- DUMS Login Form  -->

<form method="post">
<div class="row">
 <div class="large-6 small-6 large-centered small-centered columns">
 <fieldset >
    <legend>Login</legend>
		<form data-abide method="post"> 
	<?PHP if (isset($_POST['usererrors']))
	{ echo '<FONT COLOR="red">'.$_POST['usererrors'].'</font>'; } ?>		
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
		<div>
		<button type="submit" name="submit" value="submit">Submit</button>
		</div>
		</form>
</fieldset>
</div>
</div>
</form>