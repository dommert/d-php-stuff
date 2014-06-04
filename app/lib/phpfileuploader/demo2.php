<?php 
$phpuploader = "/home/dev/test/daddee/lib/phpfileuploader/";
require_once $phpuploader. "phpuploader/include_phpuploader.php" ?>
<?php session_start(); ?>


<div>

	<?php
		$uploader=new PhpUploader();

		$uploader->MultipleFilesUpload=true;
		$uploader->InsertText="Select multiple files (Max 10M)";
		
		$uploader->MaxSizeKB=10240;
		$uploader->AllowedFileExtensions="*.jpg,*.png,*.gif,*.bmp";
		$uploader->SaveDirectory="savefiles";
		$uploader->UploadUrl=$phpuploader."demo2_upload.php";
		
		$uploader->Render();



		?>

	
	<script type='text/javascript'>
	function CuteWebUI_AjaxUploader_OnTaskComplete(task)
	{
		var div=document.createElement("DIV");
		var link=document.createElement("A");
		link.setAttribute("href","savefiles/myprefix_"+task.FileName);
		link.innerHTML="You have uploaded file : savefiles/myprefix_"+task.FileName;
		link.target="_blank";
		div.appendChild(link);
		document.body.appendChild(div);
	}
	</script>
	</div>
