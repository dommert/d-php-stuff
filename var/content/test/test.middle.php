<?PHP
// Test Middle Section

// If Admin & get=edit
	// Open Page Editor
		// Retrieve (database/file)
//ELSE 
	// View Page HTML (database/file)

?>

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',
        	theme:"modern",image_advtab: true,
});
        
</script>

<form method="post">
<textarea id="block-edit" name="block">
	<?PHP if(isset($_POST['block'])) { echo $_POST['block']; } ?>
</textarea>
<button>SAVE</button>
</form>

