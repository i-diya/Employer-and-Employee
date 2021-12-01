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
	if(isset($_POST['name2']) && isset($_POST['username2']) && isset($_POST['password2']) && isset($_POST['email2']) && isset($_POST['headq']) && isset($_POST['itype']) && isset($_POST['link']) && isset($_POST['map']) && isset($_POST['desc']))
	{
		$name = $_POST['name2'];
		$user = $_POST['username2'];
		$pass = $_POST['password2'];
		$email = $_POST['email2'];
		$headq = $_POST['headq'];
		$itype = $_POST['itype'];
		$link = $_POST['link'];
		$map = $_POST['map'];
		$desc = $_POST['desc'];

		$query1 = "SELECT (COUNT(company_id)+1) AS count_id FROM company; ";
		$result1 = $conn->query($query1);
		$temp = "1";
		while($rows = $result1->fetch_assoc())
		{
			$temp = $rows["count_id"];
		}	

		$query = "INSERT INTO logcompany VALUES" . "('$user','$pass');";
		$query2 = "INSERT INTO company VALUES" . "('$temp','$name','$user','$headq','itype','$email','$link','$map','$desc');";
		
		if(!mysqli_query($conn,$query))
		{ echo "Insert failed in login:" . mysqli_error($conn) . "<br>" ; }

		if(!mysqli_query($conn,$query2))
		{ echo "Insert failed in candidate:" . mysqli_error($conn) . "<br>" ; }

	} else { echo "all details are required" ; }

}


header("location: index.php");




$conn->close();
?> 
