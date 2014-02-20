<?php 

$q = $_GET['q'];
$con = mysqli_connect('mysql.freehostingnoads.net','u657670770_user','sqldcc','u657670770_intda');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
$sql="SELECT * FROM interviews WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
?> 