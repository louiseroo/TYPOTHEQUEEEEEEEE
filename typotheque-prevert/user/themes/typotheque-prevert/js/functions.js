$(function() {
	function getRandom(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	$("h1").each(function(){
		$(this).css('left', getRandom(0, 1000)+"px");
	});
});


