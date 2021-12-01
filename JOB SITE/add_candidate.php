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
  padding: 20px;
}
.options{
	position: absolute;
	top: 65%;
	left: 50%;
	transform: translate(-50%,-50%);
}


</style>
</head>
<body> 
<br><br><br>


<div style="" class="options">

<form action="add_candidate_final.php" method="post" enctype="multipart/form-data">
<label>Name</label>	
<input type = "text" name = "name1">
<label>Username</label>	
<input type = "text" name = "username1">
<label>Password</label>	
<input type = "text" name = "password1">
<label>Email ID</label>	
<input type = "text" name = "email1">		
<label>Contact No.</label>	
<input type = "text" name = "contact1">
<label>Gender</label>	
<input type = "text" name = "gender1">
<label>Age</label>	
<input type = "text" name = "age1">			
<label>Upload resume</label><br>	
<input type="file" name="resume" id="resume"><br><br><br>
<label>Upload picture</label><br>	
<input type="file" name="image" id="image"><br>
<input type="submit" name="submit" value="Add me!">
</form>
<br>
<br>

</div>
</body>
</html>