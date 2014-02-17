<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php include 'db_connect.php'; while($row = mysqli_fetch_array($result)){echo $row['interviewed.img.loc'];}?>">
	
    <title>Profile: <?php include 'db_connect.php'; while($row = mysqli_fetch_array($result)){echo $row['interviewed.name'];}?></title>
    <link href="css/profile.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="projects.html">Projects</a></li>
        </ul>
        <h3 class="text-title">DCC Oral History</h3>
      </div>

/      <div class="jumbotron">
      	<h3>Interview with:</h3>
<?php
//$q = intval($_GET['q']);
//$q = $_GET['q'];
//sql="SELECT * FROM interviews WHERE id = '".$q."'";
include 'db_connect.php';
while($row = mysqli_fetch_array($result))
  {
  echo '<h1 class="interviewed.name">' . $row["interviewed.name"] . '</h1>
      	          <div class="row marketing">
        <div class="col-lg-6">
        <h3 class="interviewed.name"><b>' . $row['interviewed.name'] . '</b></h3>
        <img src=' .$row['interviewed.img.loc'] . ' alt="Albert Einstein" class="img-rounded" width="100%">
        <p id="interviewed.shortDesc">' . $row['interviewed.shortDesc'] . '</p>
        </div>

        <div class="col-lg-6">
          
        <h3 class="interviewer.name"><b>' . $row['interviewer.name'] . '</b></h3>
        <img src=' .$row['interviewer.img.loc'] . ' alt="Albert Einstein" class="img-rounded" width="100%">
        <p id="interviewer.shortDesc">Albert Einstein was born in Ulm, Germany on March 14, 1879. 
        	As a child, Einstein revealed an extraordinary curiosity for
        	 understanding the mysteries of science (started only at age 10/11).
        	  A typical child (only to his socio-economic class — educated middle class),
        	   Einstein took music lessons, playing both the violin and piano — a passion
        	    that followed him into adulthood. Moving first to Italy and then to Switzerland,
        	     the young prodigy graduated from high-school in 1896.</p>
        </div>';
  }

mysqli_close($con);
?>
      </div>
        <p><a class="btn btn-lg btn-success" href="database/Vampire Weekend - Step (Official Lyrics Video).mp3" role="button" controls>
Click here to hear the audio file of the interview.</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Transcription</h4>
          <p>Click here to view/download the transcription of the interview.</p>
          <a class="btn btn-primary" href="database/another_love.pdf" role="button">Transcription &raquo;</a>
        </div>

        <div class="col-lg-6">
          <h4>Audio File</h4>
          <p>Click here to download the audio file of the interview.</p>
          <a class="btn btn-primary" href="direct_download.php?file=database/Vampire Weekend - Step (Official Lyrics Video).mp3" role="button" width="200%">Audio File Download &raquo;</a>
	</div>
      </div>
      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div>

  </body>
</html>
