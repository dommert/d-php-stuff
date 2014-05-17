<?PHP
// Test Middle Section

// If Admin & get=edit
	// Open Page Editor
		// Retrieve (database/file)
//ELSE 
	// View Page HTML (database/file)

?>
<?PHP
if (isset($_REQUEST['submit']))
{
	?>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
       tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});
</script>
<?PHP
}
?>
<?PHP
$filepath = '/home/dev/test/daddee/data/upload/test.dat';
?>
<form method="post">

	<?PHP 

		if ($_REQUEST['submit'] == 'edit')
		{
			$file = fopen($filepath,"r");
			echo '<textarea class="editable" id="block-edit" name="block">';
			echo fread($file,filesize($filepath));
			echo '</textarea>';
			fclose ($file);
			echo '<button name="submit" value="save">SAVE</button>';
		}

		elseif ($_POST['submit'] == 'save')
		{
			$_REQUEST['edit'] = 'false';
			$file = fopen($filepath, "w");
			fwrite($file, $_POST['block']);
			fclose($file);
			$file = fopen($filepath,"r");
			echo fread($file,filesize($filepath));
			fclose ($file);


		}
		elseif (!isset($_POST['submit']))
		{
			$file = fopen($filepath,"r");
			echo fread($file,filesize($filepath));
			fclose ($file);
			
		}

	
	?>



</form>
