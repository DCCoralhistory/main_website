<?php 
//Connects to your Database 
require_once 'prelim_login/db_connect.php';
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['ID_my_site'])) 
 { 
 	$username = $_COOKIE['ID_my_site']; 
 	$pass = $_COOKIE['Key_my_site']; 
 	 	$check = mysqli_query($con , "SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 
 	while($info = mysqli_fetch_array( $check )) 	 
 	{ 
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 		{
			header("Location: login.php"); 
 		} 
 //otherwise they are shown the admin area	 
 	else 
 		{ 
 			 echo "Admin Area<p>"; 
			 echo "Your Content<p>"; 
			 echo "<a href=logout.php>Logout</a>"; 
 		} 
 	} 
} 
 else 
 //if the cookie does not exist, they are taken to the login screen 
{
 header("Location: login.php"); 
} 
?> 