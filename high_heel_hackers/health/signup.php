<!DOCTYPE html>
<html>
<head>

<style>

form{
	text-align:right;
	line-height:20px;
	padding-top:30px;
	font-size:80px;
	
}

body{
	
	background-image: url("includes/diet3.jpg");
}
form input{
	height:30px;
	
}
form button{
	width:12%;
	height:30px;
	float:middle;
	
	font-family:sans-serif;
	cursor:pointer;
}
form {
	padding-right:90px;
	
	
}
h1{
	text-align:right;
	padding-right:90px;
}

</style>
<body>


<h1>Sign-Up form</h1>




<form class="signup-form" action="includes/signup.inc.php" method="POST">

<input type="text" name="first" placeholder="Enter your first name"></input><br>
<input type="text" name="last" placeholder="Enter your last name"></input><br>
<input type="text" name="email" placeholder="Enter your Email"></input><br>
<input type="text" name="uid" placeholder="Enter your Username"></input><br>
<input type="password" name="pwd" placeholder="Enter your Password"></input><br>
<button type="submit" name="submit">Sign Up</button><br>

</form>



</body>


</head>
</html>