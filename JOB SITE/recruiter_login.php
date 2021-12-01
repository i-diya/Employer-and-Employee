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
	top: 70%;
	left: 50%;
	transform: translate(-50%,-50%);
}


</style>
</head>
<body> 
<br><br><br>


<div style="" class="options">

<form action="show_recruiter.php" method="post">

<label>UserName</label>	
<input type = "text" name = "username">
<label>Password</label>	
<input type = "password" name = "password">
			
<input type="submit" name="recruiter_login_submit" value="Login">
</form>
</div>



<!-- Parsing -->

 <?php

/*require 'credentials.php';
$flag=0;

if( isset($_POST['recruiter_login_submit'])){
$u=$_POST['username'];
$p=$_POST['password'];

$checku="";
$checkp="";
$ccount=0;

$cp="";
$cu="";


$conn = new mysqli($servername, $username, $password);
//echo "Error: " . $dynamic . "<br>" . $conn->error;

//Connecting TO DATABASE
$conn = new mysqli($servername, $username, $password, $dbname);



$dynamic="select * from logcompany";
$result=$conn->query($dynamic);
//echo "Error: " . $dynamic . "<br>" . $conn->error;


 
 while($row = mysqli_fetch_array($result))
          {
          //echo "<tr><td>" . $row['username'] . "</td><td> " . $row['password'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
if($row['username']==$u){$ccount=1; $cp=$row['password'];  if($cp==$p){$flag=1;} }
       
          }



if($ccount==0){echo "UserName doesnot exist";}





if($flag==1){header("Location:show_recruiter.php");}

if($flag==0 && $ccount==1){echo "PassWORD or UserName doesnot match";}

}


else{echo "Do something else";}
*/

?>



</body>
</html>
