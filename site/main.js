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
			$('body').addClass('konami');
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