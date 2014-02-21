
var currentTranscript;
function playPause(id){
	//Sets the active song since one of the functions could be play.
		currentTranscript = document.getElementById(id);
	//Checks to see if the song is paused, if it is, play it from where it left off otherwise pause it.
	if (currentTranscript.paused){
		currentTranscript.play();
	}else{
		currentTranscript.pause();
	}
}
//Stop song by setting the current time to 0 and pausing the song.
function stopSong(){
	currentTranscript.currentTime = 0;
	currentTranscript.pause();
}
//Changes the volume up or down a specific number
function changeVolume(number, direction){
	//Checks to see if the volume is at zero, if so it doesn't go any further.
	if(currentTranscript.volume >= 0 && direction == "down"){
		currentTranscript.volume = currentTranscript.volume - (number / 100);
	}
	//Checks to see if the volume is at one, if so it doesn't go any higher.
		if(currentTranscript.volume <= 1 && direction == "up"){
		currentTranscript.volume = currentTranscript.volume + (number / 100);
	}
	
	//Finds the percentage of the volume and sets the volume meter accordingly.
	var percentageOfVolume = currentTranscript.volume / 1;
	var percentageOfVolumeSlider = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;

	document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
}
// I don't think I need this to remember, kinda self-explanatory
function mute(){
	if(currentTranscript.muted == true){
		currentTranscript.muted = false;
		$('#nonfocused').attr("id","focused");
		$('#focused').attr("id","nonfocused");
		currentTranscript.play();
	}else{
		currentTranscript.muted = true;
		$('#nonfocused').attr("id","focused");
		$('#focused').attr("id","nonfocused");
		currentTranscript.pause();
	}
}
//Set's volume as a percentage of total volume based off of user click.
function setVolume(percentage){
currentTranscript.volume = percentage;

var percentageOfVolume = currentTranscript.volume / 1;
var percentageOfVolumeSlider = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;

document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
}

//Set's new volume id based off of the click on the volume bar.
function setNewVolume(obj,e){
var volumeSliderWidth = obj.offsetWidth;
var evtobj = window.event? event: e;
clickLocation = evtobj.layerX - obj.offsetLeft;

var percentage = (clickLocation/volumeSliderWidth);
setVolume(percentage);
}
//Updates the current time function so it reflects where the user is in the song.
//This function is called whenever the time is updated. This keeps the visual in sync with the actual time.
function updateTime(){
var currentSeconds = (Math.floor(currentTranscript.currentTime % 60) < 10 ? '0' : '') + Math.floor(currentTranscript.currentTime % 60);
var currentMinutes = Math.floor(currentTranscript.currentTime / 60);
//Sets the current song location compared to the song duration.
document.getElementById('songTime').innerHTML = currentMinutes + ":" + currentSeconds + ' / ' + Math.floor(currentTranscript.duration / 60) + ":" + (Math.floor(currentTranscript.duration % 60) < 10 ? '0' : '') + Math.floor(currentTranscript.duration % 60);

//Fills out the slider with the appropriate position.
var percentageOfSong = (currentTranscript.currentTime/currentTranscript.duration);
var percentageOfSlider = document.getElementById('songSlider').offsetWidth * percentageOfSong;

//Updates the track progress div.
document.getElementById('trackProgress').style.width = Math.round(percentageOfSlider) + "px";
}
/*
Gets the percentage of the click on the slider to set the song position accordingly.
Source for Object event and offset: http://website-engineering.blogspot.com/2011/04/get-x-y-coordinates-relative-to-div-on.html
*/
//Sets the location of the song based off of the percentage of the slider clicked.
function setLocation(percentage){
currentTranscript.currentTime = currentTranscript.duration * percentage;
}
/*
Gets the percentage of the click on the slider to set the song position accordingly.
Source for Object event and offset: http://website-engineering.blogspot.com/2011/04/get-x-y-coordinates-relative-to-div-on.html
*/
function setSongPosition(obj,e){
//Gets the offset from the left so it gets the exact location.
var songSliderWidth = obj.offsetWidth;
var evtobj=window.event? event : e;
clickLocation = evtobj.layerX - obj.offsetLeft;

var percentage = (clickLocation/songSliderWidth);
//Sets the song location with the percentage.
setLocation(percentage);
}
