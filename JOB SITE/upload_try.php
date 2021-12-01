<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST["SubmitBtn"])){

  $fileName=$_FILES["resume"]["name"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  

      //New file name

      echo "hello";
      //File upload path
      $uploadPath="/var/www/html/DBMS_project/resume/".$fileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){
        echo "Successful"; 
      }
      else
      {
      	echo "hello";
      }	
     echo '<pre>';
      print_r($_FILES);
       echo '</pre>';

}
?> 
