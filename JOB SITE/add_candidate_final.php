<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'login.php';
//$servername = "localhost";
//$username = "newuser";
//$password = "password";
//$database = "publications";

// Create connection

$conn = mysqli_connect($servername, $username, $password);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//select publications
$check = mysqli_select_db($conn,$database);

// check selection
if(!$check) {
   die("connection to database failed: " . mysqli_error($conn)); 
}
if(isset($_POST['submit']))

{
	if(isset($_POST['name1']) && isset($_POST['username1']) && isset($_POST['password1']) && isset($_POST['email1']) && isset($_POST['contact1']) && isset($_POST['gender1']) && isset($_POST['age1']))
	{

		$fileName=$_FILES["resume"]["name"];
  		$fileTmpName=$_FILES["resume"]["tmp_name"];

  		$fileName1=$_FILES["image"]["name"];
  		$fileTmpName1=$_FILES["image"]["tmp_name"];


		$name = $_POST['name1'];
		$user = $_POST['username1'];
		$pass = $_POST['password1'];
		$email = $_POST['email1'];
		$contact = $_POST['contact1'];
		$gender = $_POST['gender1'];
		$age = $_POST['age1'];

		$query1 = "SELECT (COUNT(candidate_id)+1) AS count_id FROM candidate; ";
		$result1 = $conn->query($query1);
		$temp = "1";
		while($rows = $result1->fetch_assoc())
		{
			$temp = $rows["count_id"];
		}	

		$uploadPath="/var/www/html/DBMS_project/resume/".$temp.".pdf";
		if(move_uploaded_file($fileTmpName,$uploadPath)){
        	echo "Successful"; 
      	}
      	else
      	{
      		echo "upload_failed";
      	}

      	$uploadPath1="/var/www/html/DBMS_project/image/".$temp.".jpeg";
		if(move_uploaded_file($fileTmpName1,$uploadPath1)){
        	echo "Successful"; 
      	}
      	else
      	{
      		echo "upload_failed";
      	}	

		$query = "INSERT INTO logcandidate VALUES" . "('$user','$pass');";
		$query2 = "INSERT INTO candidate VALUES" . "('$temp','$name','$user','$email','$temp','$contact','$gender','$age');";
		
		if(!mysqli_query($conn,$query))
		{ echo "Insert failed in login:" . mysqli_error($conn) . "<br>" ; }

		if(!mysqli_query($conn,$query2))
		{ echo "Insert failed in candidate:" . mysqli_error($conn) . "<br>" ; }



	} else { echo "all details are required" ; }

}


header("location: index.php");




$conn->close();
?> 
