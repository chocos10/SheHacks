<h1>fgdjfjhfdhgdfshg</h1>

<?php
echo " bngcfhcnh";

if(isset($_POST['submit'])) {
	echo "that";
	$dbservername="localhost";
	$dbusername="root";
	$dbpassword="shubhi";
	$dbname="loginmyself";
	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
	echo "hgfdgfc";
	$des = $_POST['disease'];
	mysqli_real_escape_string($conn,$des);
	echo "escapesequence";

	
}


?>