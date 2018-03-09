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
 mysqli_select_db($con,'medicine');

$name = $_POST['name'];
$q= "select *from medicine where name = '$name'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
  $_SESSION['name'] = $name;
  $uses="select uses from medicine where name=''$name'";
  
}
else{
  $msgg="Medicine name is incorrect or is not in the database";
   echo  '<script type='text/javascript'>alert(\"$msgg\");';
   echo 'window.location.href="new.php";';
   echo '</script>;';
}


 ?>


<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Search the medicine you want to know about?</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="container">
<form>
<fieldset class="form-group">
<label for="medicine">Enter the name of a Medicine.</label>
<input type="text" class="form-control" name="medicine" id="medicine" placeholder="Eg. Paracetamol" value = "<?php  ?>">
</fieldset>

<button type="submit" class="btn btn-primary">Submit</button>
</form>

    <div id="drug"><?php
     if(isset($drug)){
        if ($drug) {
            echo '<div class="alert alert-success" role="alert">
'.$drug.'
</div>';
}
}
if(isset($brand)){
  if ($brand) {
      echo '<div class="alert alert-success" role="alert">
'.$brand.'
</div>';
}
}/* else if ($error) {

            echo '<div class="alert alert-danger" role="alert">
'.$error.'
</div>';

}*/

        ?></div>
</div>

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
