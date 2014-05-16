<?php 
$dir = "/home/dev/test/daddee";
require_once $dir."/lib/phpfileuploader/phpuploader/include_phpuploader.php" ?>   
  
        <form id="form1" method="POST">   
            <?php   
                $uploader=new PhpUploader();   
                $uploader->Name="myuploader";    
		//$uploader->SaveDirectory="savefiles/";
                $uploader->Render();   
            ?>   
        </form>   
<?php   
//Gets the GUID of the file based on uploader name   
$fileguid=@$_POST["myuploader"];   
if($fileguid)   
{   
    //get the uploaded file based on GUID   
    $mvcfile=$uploader->GetUploadedFile($fileguid);   
    if($mvcfile)   
    {   
        //Gets the name of the file.   
        echo($mvcfile->FileName) . "<BR>";   
        //Gets the temp file path.   
        echo($mvcfile->FilePath);   
        //Gets the size of the file.   
        echo($mvcfile->FileSize);    
           
        //Copys the uploaded file to a new location.   
        $mvcfile->CopyTo("/tmp");   
        //Moves the uploaded file to a new location.   
        $mvcfile->MoveTo("savefiles/");   
        //Deletes this instance.   
        $mvcfile->Delete();   
    }   
}   

?>  


