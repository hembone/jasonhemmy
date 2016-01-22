neededkeys = [38,38,40,40,37,39,37,39,66,65], started = false, count = 0;
$(document).keydown(function(e){
	key = e.keyCode;
	if(!started){
		if(key == 38){
			started = true;
		}
	}
	if(started){
		if(neededkeys[count] == key){
			count++;
		} else {
			reset();
		}
		if(count == 10){
			youWin();
			reset();
		}
	} else {
		reset();
	}
});
function reset() {
	started = false; count = 0;
	return;
}
function youWin() {
	$('body').addClass('konami');
	player.playVideo();
	ga('send', 'event', 'rick roll', 'code', 'boom');
}
$(function() {
	$(document).on('click', '.konami .close', function() {
		$('body').removeClass('konami');
		player.stopVideo();
	});
	if(window.innerWidth>768) {
		setTimeout(function(){
			$('#contra').animate({
				bottom: '0'
			}, 300);
		}, 4000);
		setTimeout(function(){
			$('#contra').animate({
				bottom: '-200'
			}, 300);
		}, 6000);
	}
});


var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
	player = new YT.Player('player', {
		videoId: 'dQw4w9WgXcQ'
		,events: {
		  //'onReady': onPlayerReady
		  //,'onStateChange': onPlayerStateChange
		}
	});
}
