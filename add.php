<?php 
	//Connects to your Database 
	require_once 'prelim_login/db_connect.php';
	
	
	 //This code runs if the form has been submitted
	 if (isset($_POST['submit'])) { 
	 //This makes sure they did not leave any fields blank
	 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
			die('You did not complete all of the required fields');
		}
	 // checks if the username is in use
		if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
	 $usercheck = $_POST['username'];
	 $check = mysqli_query($con , "SELECT username FROM users WHERE username = '$usercheck'")or die(mysql_error());
	 $check2 = mysqli_num_rows($check);
	 //if the name exists it gives an error
	 if ($check2 != 0) {
			die('Sorry, the username '.$_POST['username'].' is already in use.');
					}
	
	 // this makes sure both passwords entered match
		if ($_POST['pass'] != $_POST['pass2']) {
			die('Your passwords did not match. ');
		}
		// here we encrypt the password and add slashes if needed
		$_POST['pass'] = md5($_POST['pass']);
		if (!get_magic_quotes_gpc()) {
			$_POST['pass'] = addslashes($_POST['pass']);
			$_POST['username'] = addslashes($_POST['username']);
				}
	 // now we insert it into the database
		$insert = "INSERT INTO users (username, password)
				VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
		$add_member = mysqli_query($con , $insert);
		?>
<h1>Registered</h1>
<p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>
<?php 
	}
	else 
	{	
	?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">		
			Username:			
				<input type="text" name="username" maxlength="60">
			Password:			
				<input type="password" name="pass" maxlength="10">
			Confirm Password:
				<input type="password" name="pass2" maxlength="10">
			<input type="submit" name="submit" value="Register">
</form>
<?php
	}
	?>