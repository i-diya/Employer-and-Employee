<html>
<body>
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

<center>
<form action="index.php">
<input type="submit" name="candidate" value="BACK TO MAIN PAGE">
</form>
</center>


</body>
</html>