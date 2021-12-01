<!DOCTYPE html>
<html>

<style>
body{
	/*background-image: url('images/glass.jpg') opacity:1;*/
background-color: #213d7f;
}
</style>
	

<head>
	<title>search_by_custom</title>
</head>
<body>

<?php
//require "credentials.php" ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname="management";
$createdb = "create database management";
$dropdb="drop database management";
$conn = new mysqli($servername, $username, $password);

//Connecting TO DATABASE
$conn = new mysqli($servername, $username, $password, $dbname);
echo $conn->error;

?>


<center>

<h2>Sort By Name <!-- <input type="text" name="sbn"> --></h2>
<?php
$dynamic="select * from company order by name";
$conn->query($dynamic);
echo $conn->error;
$result=$conn->query($dynamic);

echo "<table border='1' >";

echo "<tr><td>"."Name"."\t"."</td>"."<td>"."UserName"."\t"."</td>"."<td>"."Email-Address"."\t"."</td>"."<td>"."HeadQuarters"."\t"."</td>"."<td>"."Industry_Type"."\t"."</td>"."<td>"."WebPage_Link"."\t"."</td>"."<td>"."Map_Location"."\t"."</td></tr>"  ;



while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td> " . $row['name'] . "\t"."</td><td>" ."\t". $row['username'] ."\t". "</td><td> " . "\t".$row['email'] ."\t". "</td><td> " ."\t". $row['headquarters'] ."\t". "</td><td> " ."\t". $row['industry_type'] ."\t". "</td><td> " ."\t". $row['webpage_link'] ."\t". "</td><td> " . "\t".$row['map_location'] ."\t". "</td>    </tr>";
                 
          }
echo "</table>";
?>

<br><br><br>
or
<h2>Sort By HeadQuarters <!-- <input type="text" name="sbc"> --></h2>
<?php
$dynamic="select * from company order by headquarters";
$conn->query($dynamic);
echo $conn->error;
$result=$conn->query($dynamic);

echo "<table border='1' >";

echo "<tr><td>"."Name"."\t"."</td>"."<td>"."UserName"."\t"."</td>"."<td>"."Email-Address"."\t"."</td>"."<td>"."HeadQuarters"."\t"."</td>"."<td>"."Industry_Type"."\t"."</td>"."<td>"."WebPage_Link"."\t"."</td>"."<td>"."Map_Location"."\t"."</td></tr>"  ;



while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td> " . $row['name'] . "\t"."</td><td>" ."\t". $row['username'] ."\t". "</td><td> " . "\t".$row['email'] ."\t". "</td><td> " ."\t". $row['headquarters'] ."\t". "</td><td> " ."\t". $row['industry_type'] ."\t". "</td><td> " ."\t". $row['webpage_link'] ."\t". "</td><td> " . "\t".$row['map_location'] ."\t". "</td>    </tr>";
                 
          }
echo "</table>";
?>


<br><br><br><br><br>
or
<h2>Sort By Industry Type <!-- <input type="text" name="sbit"> --></h2>
<?php
$dynamic="select * from company order by industry_type";
$conn->query($dynamic);
echo $conn->error;
$result=$conn->query($dynamic);

echo "<table border='1' >";

echo "<tr><td>"."Name"."\t"."</td>"."<td>"."UserName"."\t"."</td>"."<td>"."Email-Address"."\t"."</td>"."<td>"."HeadQuarters"."\t"."</td>"."<td>"."Industry_Type"."\t"."</td>"."<td>"."WebPage_Link"."\t"."</td>"."<td>"."Map_Location"."\t"."</td></tr>"  ;



while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td> " . $row['name'] . "\t"."</td><td>" ."\t". $row['username'] ."\t". "</td><td> " . "\t".$row['email'] ."\t". "</td><td> " ."\t". $row['headquarters'] ."\t". "</td><td> " ."\t". $row['industry_type'] ."\t". "</td><td> " ."\t". $row['webpage_link'] ."\t". "</td><td> " . "\t".$row['map_location'] ."\t". "</td>    </tr>";
                 
          }
echo "</table>";
?>


<center>
<form action="company_final1.php">
<input type="submit"  value="SEARCH FOR MORE JOBS">
</form>
</center>

<br><br><br>

<form action="candidate.php">
<input type="submit" name="employeer_profile_submit" value="BACK">
</form>
</center>












</body>
</html>