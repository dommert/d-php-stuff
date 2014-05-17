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


<?php   
//Gets the file GUID list based on uploader name      
$fileguidlist=@$_POST["myuploader"];   
if($fileguidlist)   
{   
    //echo '<div class="row"><div class="large-4 medium-4 columns"><div data-alert="" class="alert-box success">';
    echo '<div class="large-6 medium-6 columns">';
    echo '<table> <thead> <TR> <th width="300"> File Uploads </th> </tr> </thead> <tbody>';
    $guidlist=split("/",$fileguidlist);    
    foreach($guidlist as $fileguid)   
    {   
       
        //get the uploaded file based on GUID      
        $mvcfile=$uploader->GetUploadedFile($fileguid);      
        if($mvcfile)      
        {      
             //Gets the name of the file.      
             echo '<tr><td>';
             echo($mvcfile->FileName);
             echo '<td> GOOD </td>';   
             echo '</tr></td>';  
             
             $mvcfile->MoveTo("/home/dev/test/daddee/data/upload");      
             //Deletes this instance.      
            // $mvcfile->Delete();      
        } 

    }
    echo '</tbody></table>';
    echo '<div>';
    echo '<a href="#" class="small button">Link Files</a>';  
}   
?> </div>

