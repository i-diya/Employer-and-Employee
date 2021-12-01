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
<br><br><br>


<div style="" class="options">

<form action="login_check_candidate.php" method="post">

<label>Username</label>	
<input type = "text" name = "username3">
<label>Password</label>	
<input type = "text" name = "password3">
<input type="submit" name="submit" value="Login">
</form>
</div>
</body>
</html>