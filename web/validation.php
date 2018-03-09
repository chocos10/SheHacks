<?php
 session_start();
 header('location:new.php');
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

$useremail = $_POST['useremail'];
$pass = $_POST['pass'];
$q= "select *from signin where email = '$useremail' && password = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){

  $_SESSION['useremail'] = $useremail;
  header('location:new.php');
}
else{
  $msgg="Either email or password is incorrect";
   echo  '<script type='text/javascript'>alert(\"$msgg\");';
   echo 'window.location.href="new.php";';
   echo '</script>;';

   //header('location:new.php');
}

 ?>
