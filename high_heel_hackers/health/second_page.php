<?php
session_start();
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>HEALTHY-WEALTHY</title>

        
        
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
</head>
<style>







h2 {
    font-family: Verdana, Arial, sans-serif;
    text-align: center;
	color: #FFFFFF;
}

#header {
	width: 100%;
	height: 70px;
	position: relative;
	top: -40px;
	background-color: #7FC7AF;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

p {
    font-family: Verdana, Arial, sans-serif;
    font-size: 1em;
}

.left {
	position: relative;
	top: -40px;
    float: left;
}

.right {
	position: relative;
	top: -40px;
    float: right;
}

#main {
	position: relative;
	top: 170px;
	float: left;
}




















body{
	background-color:#917F7B;
}





.navclass ul{
	background-color:black;
	color:blue;
	font-size:20px;
	font-family:sans-serif;

}

.navclass ul li{
	list-style-type:none;
	display:inline-block;
	padding:5px 10px;
	position:relative;
	color:white;
}

.navclass ul li:hover{
	background-color:#383838;
}

ul.dropdown-content{

position:absolute;
background-color:#383838;
list-style-type:none;
width:200px;
padding-left:0px;
margin-left:-10px;
padding-top:5px;
opacity:0;
}

ul.dropdown-content li{
padding-left:25px;
padding-top:5px;
}
.navclass ul li:hover .dropdown-content{
	opacity:1;
	
}
marquee{
	color:black;
}

.main
{
	text-align:center;
	background-color:#C0C0C0;
	width:100%;
	padding-top:0px;
	padding-bottom:10px;
	padding-left:5px;
	padding-right:5px;
}
.logout button{
	float:right;
	height:30px;
	background-color:black;
	color:white;
	font-size:20px;
}
button{
	background-color:black;
	color:white;
	font-size:20px;
}
button:hover{

background-color:#383838;

}
form{
	display:inline-block;
}
</style>

<body>

<nav class="navclass">
<ul>
<p>
<form class="home" action="index.php">
<button >Home


</button>


</form>

  
<form class="more" action="more.php">
    
 
<button>More

</button>
    </form>
 <form class="contact" action="contact.php">

<button>Contact No.

</button>
  
 </form> 
 <form class="contact" action="about_us.php">
<button>About us


</button>
</form>
 <form class="logout" action="includes/logout.inc.php">   
<button type="submit" name="submit">Logout

</button>	
	
	
	</form>
	</p>
	
</div>
</ul>
</nav>

<div class="main">
<h2>Be aware of healthy diet for you</h2>



<?php

$sql= "select Disease_type from nutrients";
$result=mysqli_query($conn,$sql);





?>
<form class="submit-form" action="/health/includes/page.php" method="POST">
SELECT YOUR DISEASE  
 <select>
            <?php while($row1 = mysqli_fetch_array($result)):;?>

            <li  name="disease"><?php echo $row1[0];?></li>

            <?php endwhile;?>
        </select>


</select><br><br>



<input type="submit" value="submit" name="submit"></input>
</form>
<form class="reset-form" action="includes/second_page_reset.inc.php" method="POST">
<input type="submit" value="reset"></input><br>
</form>


<script type="text/javascript" src="js/index.js"></script>




</div>


</body> 
</html>