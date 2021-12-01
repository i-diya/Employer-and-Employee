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

input[type=submit]{
    background-color: #ffff00; /* Green */
    border: 2px rgba(0,0,0,0);
	/*border-color: #1a75ff;*/
    color:  #006600;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
	height: 80px;
	width: 300px;
}
input[type=submit]:hover{
background-color:  #008000;
color: black;
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

<form action="login_candidate.php" method="post">
<input type="submit" name="submit" value="login as a job seeker">
</form>
<br>

<form action="recruiter_login.php" method="post">
<input type="submit" name="submit" value="login as a job recruiter">
</form>
<br><br>

<form action="add_candidate.php" method="post">
<input type="submit" name="submit" value="I am a new job seeker">
</form>
<br>

<form action="add_company.php" method="post">
<input type="submit" name="submit" value="I am a new company">
</form>
<br>

</div>
</body>
</html>