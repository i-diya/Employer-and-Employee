<!DOCTYPE html>
<html>
<head>
	<title>Show_Recruiter</title>
</head>
<body>


<!-- Parsing -->

 <?php

require 'credentials.php';
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname="management";
$createdb = "create database management";
$dropdb="drop database management";
*/
$conn = new mysqli($servername, $username, $password);

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





if($flag==1){//header("Location:show_recruiter.php"); 
echo "You are Now Logged-In as $u";

$dynamic="select * from company";
$result=$conn->query($dynamic);

echo "<table border='1' >";

echo "<tr><td>"."Name"."\t"."</td>"."<td>"."UserName"."\t"."</td>"."<td>"."Email-Address"."\t"."</td>"."<td>"."HeadQuarters"."\t"."</td>"."<td>"."Industry_Type"."\t"."</td>"."<td>"."WebPage_Link"."\t"."</td>"."<td>"."Map_Location"."\t"."</td></tr>"  ;


while($row = mysqli_fetch_array($result))
          {
          if($u==$row['username']){
          echo "<tr><td> " . $row['name'] . "\t"."</td><td>" ."\t". $row['username'] ."\t". "</td><td> " . "\t".$row['email'] ."\t". "</td><td> " ."\t". $row['headquarters'] ."\t". "</td><td> " ."\t". $row['industry_type'] ."\t". "</td><td> " ."\t". $row['webpage_link'] ."\t". "</td><td> " . "\t".$row['map_location'] ."\t". "</td>    </tr>";
               }  
          
          }
echo "</table>";



}

if($flag==0 && $ccount==1){echo "PassWORD or UserName doesnot match";
header("Location:recruiter_login.php");
}

}

else{header("Location:recruiter_login.php");
}


?>


<br><br><br><br>
<center><h1>All Candidates</h1></center>
<br><br><br>

<?php

require "credentials.php";

$conn = new mysqli($servername, $username, $password);

//Connecting TO DATABASE
$conn = new mysqli($servername, $username, $password, $dbname);
echo $conn->error;

$dynamic="select * from company";
$result=$conn->query($dynamic);

echo "<table border='1' >";

echo "<tr><td>"."Name"."\t"."</td>"."<td>"."UserName"."\t"."</td>"."<td>"."Email-Address"."\t"."</td>"."<td>"."HeadQuarters"."\t"."</td>"."<td>"."Industry_Type"."\t"."</td>"."<td>"."WebPage_Link"."\t"."</td>"."<td>"."Map_Location"."\t"."</td></tr>"  ;



while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td> " . $row['name'] . "\t"."</td><td>" ."\t". $row['username'] ."\t". "</td><td> " . "\t".$row['email'] ."\t". "</td><td> " ."\t". $row['headquarters'] ."\t". "</td><td> " ."\t". $row['industry_type'] ."\t". "</td><td> " ."\t". $row['webpage_link'] ."\t". "</td><td> " . "\t".$row['map_location'] ."\t". "</td>    </tr>";
                 
          }
echo "</table>";



?>


<form action="index.php">
<input type="submit" name="candidate" value="BACK TO MAIN PAGE">
</form>







</body>
</html>