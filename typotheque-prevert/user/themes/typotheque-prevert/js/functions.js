$(function() {
	function getRandom(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	$("h1").each(function(){
		$(this).css('left', getRandom(0, 1000)+"px");
	});
			var zoom = 1;

			$('.target').css('transform', 'scale(' + zoom + ')');

		$('.zoom').on('click', function(){
			if (zoom < 3){
				zoom += 0.3;
			$('.target').css('transform', 'scale(' + zoom + ')');
			};
		});
		$('.zoom-init').on('click', function(){
			zoom = 1;
			$('.target').css('transform', 'scale(' + zoom + ')');
		});
		$('.zoom-out').on('click', function(){
			if (zoom > 1){
				zoom -= 0.3;
			$('.target').css('transform', 'scale(' + zoom + ')');
		}
		});

  $( function() {
    $( ".box" ).draggable();
  } );
});





