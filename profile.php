<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Profile: (Whoever it is)</title>

    <link href="css/dccoralhistory.css" rel="stylesheet">

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

      <div class="jumbotron">
<?php
include 'db_connect.php';
while($row = mysqli_fetch_array($result)){
      	echo '<h3>Interview with:</h3>
        <h1><!--Whoever it is-->' . $row['interviewed.name'] . '</h1>
        <img src="' . $row['interviewed.img.loc'] . '" alt="' . $row['interviewed.name'] . '" class="img-rounded">
        <div style="padding-top: 30px; padding-bottom: 30px;">
        	<p>
        		' . $row['interviewed.name'] . ' is ' . $row['interviewed.age'] . '.
        		' . $row['interviewed.name'] . ' was born in ' . $row['birth.place'] . ' and moved to ' . $row['moved.place'] . '. 
        		They lived during ' . $row['interviewed.int.fact'] . '. 
        	</p>
        <p><a class="btn btn-lg btn-success" href="transcript_audio_player.php?src=' . $row['transcript.audio.src'] . '" role="button">Listen to ' . $row['interviewed.name'] . '&rsquo;s interview &raquo;</a></p>
        </div>
      </div>

	  <div class="row marketing">
        <div class="col-lg-6">
          <h4>Transcription</h4>
          <p>Click here to view/download the transcription of the interview.</p>
          <a class="btn btn-primary" href="' . $row['transcript.src'] . '" role="button">Transcription &raquo;</a>
        </div>

        <div class="col-lg-6">
          <h4>Audio File</h4>
          <p>Click here to download the audio file of the interview.</p>
          <a class="btn btn-primary" href="direct_download.php?file=' . $row['transcript.audio.src'] . '" role="button" width="200%">Audio File Download &raquo;</a>
		</div>
       </div>';}
	mysqli_close($con);
?>
      <div class="footer">
        <p>&copy; Dunshaughlin Community College 2014</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>