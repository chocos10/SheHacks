<?php
 session_start();

 $con = mysqli_connect('localhost','root','1234');
 if($con){
   // echo "connection successful";
   // $msgg="sucess";
   // echo  "<script type='text/javascript'>alert(\"$msgg\");</script>";
 }
 else {
   echo "no connection";
 }
 mysqli_select_db($con,'medipas');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$q= "select *from signin where email = '$email' && password = '$password'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num != 0){
  $msgg="Enter another email";
   echo  '<script type='text/javascript'>alert(\"$msgg\");';
   echo 'window.location.href="new.php";';
   echo '</script>;';
}
else{
  $qy= "insert into signin(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')";
   mysqli_query($con,$qy);
   $msgg="successful";
    echo  '<script type='text/javascript'>alert(\"$msgg\");';
    echo 'window.location.href="new.php";';
    echo '</script>;';
}

 ?>
