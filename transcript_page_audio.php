<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="favicon.ico">

		<title>DCC Oral History</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="js/playerscript.js"></script>
		<link href="css/dccoralhistory.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-switch.css" rel="stylesheet">
		<script src="js/bootstrap-switch.js"></script>
		<script>
			$(document).ready(function(){
				$("[name='mute']").bootstrapSwitch();
				setVolume(0.5);
			});
		</script>
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
				<source src="<?php echo "". $_GET['src'] ."" ; ?>" type="audio/mp3" />
				Your browser does not support the audio tag.
				</audio>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-lg" onclick="playPause('song')">
						<span class="glyphicon glyphicon glyphicon-play"></span><span class="glyphicon glyphicon glyphicon-pause"></span>
					</button>
					<button type="button" class="btn btn-default btn-lg" onclick="stopSong()">
						<span class="glyphicon glyphicon glyphicon-stop"></span>
					</button>
					<button type="button" class="btn btn-default btn-lg" onclick="changeVolume(10,'up')">
						<span class="glyphicon glyphicon glyphicon-volume-up"></span>
					</button>
					<button type="button" class="btn btn-default btn-lg" onclick="changeVolume(10,'down')">
						<span class="glyphicon glyphicon glyphicon-volume-down"></span>
					</button>
					<button type="button" class="btn btn-default btn-lg" onclick="mute()" id="nonfocused">
						<span class="glyphicon glyphicon glyphicon-volume-off"></span>
					</button>
					<input style="float:left" type="checkbox" name="mute" checked data-size="large" data-label-text="<span class='glyphicon glyphicon-play'></span>" data-on-text="<span class='glyphicon glyphicon glyphicon-play'></span>" data-off-text="<span class='glyphicon glyphicon-pause'></span>">
					<button type="button" class="btn btn-default btn-lg">
						<a href="direct_download.php?file=https://dl.dropboxusercontent.com/u/261481934/Transcriptions/10-the_tallest_man_on_earth-kids_on_the_run.mp3"><span class="glyphicon glyphicon glyphicon-download"></span></a>
					</button>
					<!-- Song Slider tracks progress on song time change, if you click it sets the distance into the song based on the percentage of where was clicked -->
				</div>
				<div class="form-group">
					<input id="option1" type="radio" name="mute" value="option1" data-on-text='<span class="glyphicon glyphicon glyphicon-play"></span>' data-off-text="<span class='glyphicon glyphicon-pause'></span>">
					<input id="option2" type="radio" name="mute" value="option2">
				</div>
				<div  class="progress progress-striped active">
					<div id="songSlider" onclick="setSongPosition(this,event)" class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
					<span id="trackProgress"></span>
					</div>
				</div>
				<div id="volumeMeter" onclick="setNewVolume(this,event)"><span id="volumeStatus"></span></div>
				<!-- <div id="songSlider" onclick="setSongPosition(this,event)"><span id="trackProgress"></span></div> -->
				<div id="songTime">SongTime</div>
				<!-- <div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div> -->		
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
