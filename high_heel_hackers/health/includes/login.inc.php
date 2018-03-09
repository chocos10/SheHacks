<?php

include_once 'dbh.inc.php';
if(isset($_POST['submit']))
{
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	
	//error handler
	if(empty($uid) || empty($pwd))
	{
			header("Location: ../login.php?login=empty");
			exit();
	}
	else{
		$sql="select * from users where user_uid='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		
			if($resultCheck<1)
			{
				header("Location: ../login.php?login=error1");
				exit();
			}
			else{
				if($row=mysqli_fetch_assoc($result))
				{
					//dehashing the password
					$hashpasswordcheck=password_verify($pwd,$row['user_password']);
					if($hashpasswordcheck == false){
						header("Location: ../login.php?login=error2");
						exit();
					}
					elseif($hashpasswordcheck == true){
						$_SESSION['u_id'] = $row['uid'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_uid'] = $row['user_uid'];
					}
				}
				
			}
		
	}
}
else
{
	header("Location: ../login.php?login=error");
	exit();
}

if(isset($_SESSION['u_id']))
{
	

header("Location: ../second_page.php"); 
exit; // <- don't forget this!


}

?>