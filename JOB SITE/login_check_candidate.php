<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-color: #3385ff /*#1a75ff*/;
	/*background-image: url("4.jpg");*/
	/*background-position: center;*/
	background-repeat: repeat-y;
	background-size: cover;
	height: 100%
}

h1{
	color: #008000;
	text-align: center;
	font-family: "Courier New", Monospace;
	font-style: italic;
	font-size: 40px;
	
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
}
.options{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
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
	if(isset($_POST['username3']) && isset($_POST['password3']))
	{
		$user = $_POST['username3'];
		$pass = $_POST['password3'];

		$query = "SELECT * FROM logcandidate where username = '$user' and password = '$pass';";
		$result = $conn->query($query);
		if($result->num_rows == 0)
		{
			echo '<div style="" class="options">';
			echo "<label>invalid username or password</label>";
			echo '<form action="index.php" method="post">';
			echo '<input type="submit" name="submit" value="retry">';
			echo "</form>";
			echo '</div>';
		}	
		else
		{
			echo '<form id="myForm" action="candidate.php" method="post">';
			echo '<input type="hidden" name="username" value="'.$user.'">';
			echo '<input type="hidden" name="password" value="'.$pass.'">';
			echo "</form>";
			echo '<script type="text/javascript">
    document.getElementById(\'myForm\').submit();
</script>';

		}	
	} else { echo "all details are required" ; }

}


//header("location: index.php");




$conn->close();
?> 
</body>
</html>