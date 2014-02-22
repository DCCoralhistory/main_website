
<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
require_once 'prelim_login/db_connect.php';
//setcookie("user", "", time()-3600);
// define variables and set to empty values
$nameErr = $emailErr = $restrictionErr = $websiteErr = $passErr = "";
$name = $email = $restriction = $comment = $website = $pass = $pass2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["name"]))
	 {$nameErr = "Name is required";}
	else
	 {
	 $name = test_input($_POST["name"]);
	 // check if name only contains letters and whitespace
	 if (!preg_match("/^[a-zA-Z ]*$/",$name))
		{
		$nameErr = "Only letters and white space allowed"; 
		}
	 }
	 if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
	 $usercheck = $_POST['username'];
	 $check = mysqli_query($con , "SELECT username FROM users WHERE username = '$usercheck'")or die(mysql_error());
	 $check2 = mysqli_num_rows($check);
	 //if the name exists it gives an error
	 if ($check2 != 0) {
		$nameErr 'Sorry, the username '.$_POST['username'].' is already in use.';
	}
	
	if (empty($_POST["email"]))
	 {$emailErr = "Email is required";}
	else
	 {
	 $email = test_input($_POST["email"]);
	 // check if e-mail address syntax is valid
	 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
		{
		$emailErr = "Invalid email format"; 
		}
	}
	 // this makes sure both passwords entered match
		if ($_POST['pass'] != $_POST['pass2']) {
		$passErr('Your passwords did not match.');
		}
	if (empty($_POST["website"]))
	{$website = "";}
	else
	{
	$website = test_input($_POST["website"]);
	// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
		{
		$websiteErr = "Invalid URL"; 
		}
	}
	 
	if (empty($_POST["restriction"]))
	 {$restrictionErr = "a choise is required";}
	else
	 {$restriction = test_input($_POST["restriction"]);}
}

function test_input($data)
{
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
}
?>
<!--</?php if (isset($_COOKIE["user"]))
	echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
	echo "Welcome guest!<br>";-
?>-->
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	Name: <input type="text" name="name" value="<?php echo $name;?>">
	<span class="error">* <?php echo $nameErr;?></span>
	<br><br>
	E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>
	Password <input type="password" name="pass" value="<?php echo $pass;?>">
	<span class="error"><?php echo $passErr;?></span>
	<br><br>
	Restriction ?: 
	<input type="radio" name="restriction" <?php if (isset($restriction) && $restriction=="yes") echo "checked";?>	value="yes">Yes
	<input type="radio" name="restriction" <?php if (isset($restriction) && $restriction=="no") echo "checked";?>	value="no">No
	<span class="error">* <?php echo $restrictionErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Submit"> 
</form>

<?php
if($nameErr = $emailErr = $restrictionErr = $websiteErr = ""){
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";
echo $restriction;
}
?>

</body>
</html>