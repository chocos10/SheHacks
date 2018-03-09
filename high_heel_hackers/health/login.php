
<!DOCTYPE html>
<html>
<head>
<title>OM MEDICOSE</title>
<link rel="stylesheet" type="text/css" href="style.css" >

<style>

body{
	background-image: url("includes/diet5.jpg");
	background-size:100%;
}

form input{
	width:200px;
	height:30px;
}
form button{
	width:200px;
	height:30px;
	margin-left:80px;
}
.capbox{
	width:200px;
	margin-left:80px;
}
</style>

</head>
<body>

<form class="login-form" action="includes/login.inc.php" method="POST">

USERNAME<input type="text" name="uid"><br><br></input>
PASSWORD<input type="password" name="pwd"><br><br></input>



<!-- START EXAMPLE CAPTCHA FORM -->
<form onsubmit="return checkform(this);" class="formmargin">

<div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br>

<br>

<button type="submit" name="submit">Login</button><br>

</form>
<!-- END EXAMPLE CAPTCHA FORM -->

<!-- START CAPTCHA SCRIPT -->

<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

<?php

if(isset($_SESSION['u_id']))
{
	echo "you are logged in";
}
?>
</body>
</html>