<form data-abide method="post" action=""> 

<div class="email-field"> 
	<label>Email <small>required</small> 
	<input type="email" required> 
	</label> 
</div>

<div class="name-field">
	<label>First Name <small>required</small> 
	<input type="text" required pattern="[a-zA-Z]+"> 
	</label>
</div>

<div class="name-field">
	<label>Last Name <small>required</small> 
	<input type="text" required pattern="[a-zA-Z]+"> 
	</label>
</div>

<div class="name-field">
	<label>Description  
	<textarea id="remarks" name="remarks" placeholder="Leave your remarks here."></textarea>
	</label>
</div>

<button type="submit">Submit</button>
</form>