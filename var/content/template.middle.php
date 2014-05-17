<h2>Template File</h2>
<p> This is the sample template File! </p>
<?PHP
//include $dir."/lib/phpfileuploader/demo1.php";

?>

<?php 
$phpuploader = "/home/dev/test/daddee/lib/phpfileuploader/";
require_once $phpuploader."phpuploader/include_phpuploader.php";
?>

<div>
<FORM method="POST">
	<?php
	$upurl = $url ."/var/content/template.send2.php";
		$uploader=new PhpUploader(); 
		$uploader->MultipleFilesUpload=true;
		$uploader->Name="myuploader";
        //$uploader->UploadUrl= $upurl;    		 
		$uploader->InsertText="Select files (Max 100Mb)";
		$uploader->MaxSizeKB=102400;
		//$uploader->AllowedFileExtensions="*.jpg,*.png,*.gif,*.bmp,*.txt,*.zip,*.rar, *.jpeg, *.*";
		$uploader->AllowedFileExtensions="*.*";
		$uploader->TempDirectory="/tmp"; 
		//$uploader->SaveDirectory=$phpuploader."savefiles";
		$uploader->FlashUploadMode="Partial";
		$uploader->Render();
	include $content."/template.send.php";
	?>
</FORM>
</div>

<a href="<?=$url.'/themes/dums/page.logout.php';?>">Log Out</a>