
<?php
  $targetDir = "uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir.$fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    
    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    	$allowsTypes = array('png','jpg','jpeg','gif','pdf');
    	if(in_array ($fileType,$allowsTypes)){

    	if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath)){
    		echo $fileName;
             }
    		else {
    			echo "Failed to Upload";
    		}

    	}
    
    else{
    	echo "File type not allowed!";

    }
}
	else{
		echo "No file upload.";
	}
  ?>