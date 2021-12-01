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
  padding: 20px 30px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 30px;
}


input[type=submit]:hover {
  background-color: #45a049;
}

label{
	color: #008000;
	text-align: center;
	font-family: "Courier New", Monospace;
	font-style: italic;
	font-size: 20px;

}
div {
  width: 300px;	
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 25px;
}
.options{
	position: absolute;
	top: 15%;
	left: 20%;
	transform: translate(-50%,-50%);
}

.options1{
	position: absolute;
	top: 63%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.options2{
	position: absolute;
	top: 15%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.options3{
	position: absolute;
	top: 15%;
	left: 80%;
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


	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$query = "SELECT * FROM candidate WHERE username = '$user'; ";
		$result = $conn->query($query);

		while($rows = $result->fetch_assoc())
		{
			echo '<div style="" class="options">';
			echo "</br>";
			echo "<label>Name :    </label> ".$rows["name"];
			echo "</br>";
			echo "<label>Email ID :    </label> ".$rows["email"];
			echo "</br>";
			echo "<label>Contact no. :   </label> ".$rows["contact_no"];
			echo "</br>";
			echo "<label>Gender :    </label> ".$rows["gender"];
			echo "</br>";
			echo "<label>Age :    </label> ".$rows["age"];
			echo "</div>";

			echo ' <embed class="options1" src=resume/'.$rows["candidate_id"].'.pdf width="100%" height="420px"/>';
			echo ' <embed class="options2" src=image/'.$rows["candidate_id"].'.jpeg width="20%" height="180px"/>';

			echo '<form class="options3" action="search_job.php" method="post">';
			echo '<input type="hidden" name="candidate_id" value="'.$rows["candidate_id"].'">';
			echo '<input type="submit" name="submit" value="Look for jobs">';
			echo '</form>';
		}	
	} else { echo "all details are required" ; }




//header("location: index.php");




$conn->close();
?> 

<form action="search_by_custom.php">
<input type="submit" name="candidate" value="CLICK TO ACCESS ALL JOBS">
</form>



</body>
</html>
