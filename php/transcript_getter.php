<!DOCTYPE html>
<html>
<body>
	<head>
		<title>TG.php</title>
	</head>
<?php
 
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','738470','rqd6yhtj','738470');
if (!$con)
  {
  die(mysqli_error($con));
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
mysqli_select_db($con,"Interviews");
$sql="SELECT * FROM Interviews WHERE id = '".$q."'";
 
$result = mysqli_query($con,$sql);
 
echo "<table border='1'>
<tr>
<th>id</th>
<th>FullBody</th>
<th>image</th>
<th>audioLink</th>
<th>audioLink[as <a>]</th>
</tr>";
 
while(true)
  {
  $row = mysqli_fetch_array($result);
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['FullBody'] . "</td>";
  echo "<td>" . "<img src = '" . $row["image"] . "' alt = 'image is unavailable' style={'width:50px;height:50px'}></img>" . "</td>";
  echo "<td>" . "<audio controls><source src='" . $row['audioLink'] . "' type='audio/mpeg'><source src='" . $row['audioLink'] . "' type='audio/mpeg'>Your browser does not support the audio element.</audio>" . "</td>";
  echo "<td>" . "<a href='" . $row['audioLink'] . "' target='_blank'>link</a>" . "</td>";
  echo "</tr>";
  break;
  }
echo "</table>";
 
mysqli_close($con);
?>
 
</body>
</html>