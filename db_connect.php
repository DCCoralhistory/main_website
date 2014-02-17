<?php 

$q = $_GET['q'];
$con = mysqli_connect('mysql6.000webhost.com','a4662930_TOR','rqd6yhtj','a4662930_TOR');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
$sql="SELECT * FROM interviews WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
?> 