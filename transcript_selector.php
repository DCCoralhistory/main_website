<!DOCTYPE html>
<html>
<head>
<meta title="transcript-selector"/>
<link rel="stylesheet" href="CSS/main.css" />
 
<link rel="shortcut icon" href="img/TYOralHistory_iconLQ.png" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="jmenu/css/jmenu.css" media="screen" />
<script type="text/javascript" src="jmenu/js/jquery-ui.js"></script>
<script type="text/javascript" src="jmenu/js/jMenu.jquery.min.js"></script>
<script type="text/javascript" src="jmenu/init.js"></script>
 
 <link rel="stylesheet" src="C:\Users\10codonnell.dcc\Documents\Aptana Studio 3 Workspace\dccoralhistory\css\bootstrap.css" />
 
<script>
function showInterview(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","transcript_getter.php?q="+str,true);
xmlhttp.send();
}
</script>
 
</head>
	<div class="container">
	      <div class="header">
	        <ul class="nav nav-pills pull-right">
	          <li class="active"><a href="#">Home</a></li>
	          <li><a href="C:\Users\10codonnell.dcc\Documents\Aptana Studio 3 Workspace\dccoralhistory\about\about.html">About</a></li>
	          <li><a href="#">Downloads</a></li>
	        </ul>
	        <h3 class="text-muted">DCC Oral History</h3>
	      </div>
<body>
 <!-- <!--  <!DOCTYPE html>
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
</html>-->
 
  -->
<img id="header" src="img/TYOralHistory_headerHQ.jpg" alt="TY Oral History Project"><img>
 
<div id="king">
 
 
 
<form>
<select name="people" onchange="showInterview(this.value)">
<option value="">Select an interview:</option>
<option value="1">Sample A</option>
<option value="2">Sample B</option>
<option value="3">Sample C</option>
<option value="4">Sample D</option>
<option value="5">Sample e</option>
<option value="6">Sample f</option>
<option value="1">Sample A</option>
<option value="2">Sample B</option>
<option value="3">Sample C</option>
<option value="4">Sample D</option>
<option value="5">Sample e</option>
<option value="6">Sample f</option>
<option value="1">Sample A</option>
<option value="2">Sample B</option>
<option value="3">Sample C</option>
<option value="4">Sample D</option>
<option value="5">Sample e</option>
<option value="6">Sample f</option>
<option value="1">Sample A</option>
<option value="2">Sample B</option>
<option value="3">Sample C</option>
<option value="4">Sample D</option>
<option value="5">Sample e</option>
<option value="6">Sample f</option>
<option value="1">Sample A</option>
<option value="2">Sample B</option>
<option value="3">Sample C</option>
<option value="4">Sample D</option>
<option value="5">Sample e</option>
<option value="6">Sample f</option>
</select>
</form>
<br>
<div id="txtHint"><b>Select a person to have their info listed here.</b></div>
</div>
</body>
</html>