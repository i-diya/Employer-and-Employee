<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1">
<style>
body{
	/*background-color: #3385ff /*#1a75ff*/;
	/*background-image: url("5.jpg");*/
	/*background-position: center;*/
	/*background-repeat: no-repeat;*/
	background-size: cover;
	height: 100%
}

h1{
	color: #0066ff;
	text-align: center;
	font-family: "Courier New", Monospace;
	font-style: italic;
	font-size: 40px;
	
}

font{
	font-size: 15px;
	text-align: center;
	color: #663300;
	
}
/*table {
	border: 1px solid rgba(150,100,0,1);
}*/
th,td {
	text-align: center;
	padding: 7px;
	border-bottom: 1px solid rgba(100,100,55,1);
}
th {
	background-color: #6f6fdc
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color:#adadeb;}

input[type=submit]{
    background-color: white; /* Green */
    border: none;
	/*border-color: #1a75ff;*/
    color:  #006600;
    padding: 15px 32px;
   text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
	height: 50px;
	width: 140px;
}
</style>
</head>

<body> 

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
		echo "<h1> EXPLORE! </h1>";
		$id = $_POST['candidate_id'];
		$query = "SELECT * FROM (job natural join hires) join company using (company_id)  ";
		
}


//header("location: index.php");




$conn->close();
?> 
</body>
</html>