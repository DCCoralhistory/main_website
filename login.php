<?php 
	//Connects to your Database 
	 require_once 'prelim_login/db_connect.php';
	 //Checks if there is a login cookie
	 if(isset($_COOKIE['ID_my_site']))
	 //if there is, it logs you in and directes you to the members page
	 { 
		$username = $_COOKIE['ID_my_site']; 
		$pass = $_COOKIE['Key_my_site'];
			$check = mysqli_query($con , "SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
		while($info = mysqli_fetch_array( $check ))	
			{
			if ($pass != $info['password']) 
				{
				}
			else
				{
				header("Location: members.php");
				}
			}
	 }
	 //if the login form is submitted 
	 if (isset($_POST['submit'])) { // if form has been submitted
	 // makes sure they filled it in
		if(!$_POST['username'] | !$_POST['pass']) {
			echo 'You did not fill in a required field.';
		}
		// checks it against the database
		if (!get_magic_quotes_gpc()) {
			$_POST['email'] = addslashes($_POST['email']);
		}
		$check = mysqli_query($con , "SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());
	 //Gives error if user dosen't exist
	 $check2 = mysqli_num_rows($check);
	 if ($check2 == 0 && $_POST['username'] != NULL && $_POST['pass'] != NULL) {
			echo 'Invalid username. <a href=add.php>Click Here to Register</a>';
				}
	 while($info = mysqli_fetch_array( $check ))
	 {
	 $_POST['pass'] = stripslashes($_POST['pass']);
		$info['password'] = stripslashes($info['password']);
		$_POST['pass'] = md5($_POST['pass']);
	 //gives error if the password is wrong
		if ($_POST['pass'] != $info['password']) {
			echo 'Incorrect password, please try again.';
			
		}
	 else
	 { 
	 // if login is ok then we add a cookie 
	$_POST['username'] = stripslashes($_POST['username']); 
	$expire=time()+60*60*24*30;
	setcookie(ID_my_site, $_POST['username'], $expire); 
	setcookie(Key_my_site, $_POST['pass'], $expire);	 
	 
	//then redirect them to the members area 
	header("Location: members.php"); 
	 } 
	} 
	} 
	
	else 
	{
	 // if they are not logged in 
	 ?> 
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<h1>Login</h1>
			<p>Username: <input type="text" name="username" maxlength="40"></p>
			<p>Password: <input type="password" name="pass" maxlength="50"></p>
				<input type="submit" name="submit" value="Login">
</form>
<?php 
	}
	?>