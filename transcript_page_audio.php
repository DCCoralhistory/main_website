<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

		<title>DCC Oral History</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>var activeSong;
				//Plays the song. Just pass the id of the audio element.
				function play(id){
					//Sets the active song to the song being played. All other functions depend on this.
					activeSong = document.getElementById(id);
					//Plays the song defined in the audio tag.
					activeSong.play();

					//Calculates the starting volume percentage of the song.
					var percentageOfVolume = activeSong.volume / 1;
					var percentageOfVolumeMeter = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;

					//Fills out the volume status bar.
					document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
				}</script>
		<link href="css/dccoralhistory.css" rel="stylesheet">

	</head>

	<body>
		<div class="container">
			<?php require_once 'includes/header_file.php'; ?>

			<div class="jumbotron">
				<h1>Oral History Project</h1>
				<p class="lead">
					Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</p>
				<audio id="song" width="300" height="32" ontimeupdate="updateTime()">
				<source src="https://dl.dropboxusercontent.com/u/261481934/Transcriptions/10-the_tallest_man_on_earth-kids_on_the_run.mp3" type="audio/mp3" />
				Your browser does not support the audio tag.
				</audio>
				<button type="button" class="btn btn-default btn-lg" onclick="play('song')">
					<span class="glyphicon glyphicon glyphicon-play"></span>
				</button>
				
			</div>
			
		</div>

			<div class="footer">
				<p>
					&copy; DCC 2014 (psst, try up up down down left right left right b a)
				</p>
			</div>

		</div>
		<!-- /container -->

	</body>
</html>
