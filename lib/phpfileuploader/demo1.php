<?php 
$phpuploader = "/home/dev/test/daddee/lib/phpfileuploader/";
require_once $PhpUploader."phpuploader/include_phpuploader.php" ?>

	<div>
	
<hr/>
  
	<?php
		$uploader=new PhpUploader(); 
		$uploader->MultipleFilesUpload=true;
		$uploader->Name="myuploader"; 
		$uploader->InsertText="Select files (Max 100Mb)";
		$uploader->MaxSizeKB=102400;
		$uploader->AllowedFileExtensions="*.jpg,*.png,*.gif,*.bmp,*.txt,*.zip,*.rar, *.*";
		$uploader->SaveDirectory=$phpuploader."savefiles";
		$uploader->FlashUploadMode="Partial";
		$uploader->Render();
	
	?>

	
	</div>
		

