<?php

if(isset($_POST['submit']))
{
	include_once 'dbh.inc.php';
	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	// Error handlers
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
	{
			header("Location: ../signup.php?signup=empty");
			exit();
	}
	else{
	
		//check input validity
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last))
		{
			header("Location: ../signup.php?signup=invalid");
			exit();
		}
		else{
			//check if email is valid
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=invalid_email");
				exit();			
			}
			else{
				$sql= "select * from users where user_uid='$uid'";
				
				$result=mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				while ($row = $result->fetch_assoc()) {
					echo $row['uid']."<br>";
}
				
				if($resultCheck > 0)
				{
					header("Location: ../signup.php?signup=usertaken");
					exit();
				}
				else{
					//hashing the password
					$hashpassword=password_hash($pwd,PASSWORD_DEFAULT);
					//insert the user into the database
					$sql="insert into users (user_first,user_last,user_email,user_uid,user_password) values ('$first','$last','$email','$uid','$hashpassword');";
					mysqli_query($conn,$sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
}
else
{
	header("Location: ../signup.php");
	exit();
}


?>