<?php 

$q = $_GET['q'];
$con = mysqli_connect('localhost','385937','1dccoralhistory','385937');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
$sql="SELECT * FROM interviews WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
?> 