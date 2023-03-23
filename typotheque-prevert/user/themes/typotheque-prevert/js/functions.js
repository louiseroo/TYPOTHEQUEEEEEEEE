$(function() {
	function getRandom(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	$("h1").each(function(){
		$(this).css('left', getRandom(0, 1000)+"px");
	});
			var zoom = 2.5;
			var myDiv = $('.target');
			var scrollto = myDiv.offset().top + (myDiv.height() / 2);
			myDiv.animate({ scrollTop:  scrollto});

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
  
  		$('.accordion').on('click', function(){
  			$('.panel').slideToggle();
			$('.header-panel-font').slideUp();
  		});
		  $('.fermer').on('click', function(){
			$('.header-panel-font').slideUp();
			$('.entree-font').removeClass('low-opacity');
		});
  		$('.entree-font').on('click', function(){
			$('.panel').slideUp();
  			$('.header-panel-font').slideDown();
			$('.entree-font').removeClass('low-opacity');
  			$('.entree-font').not(this).addClass('low-opacity');

			var name = $(this).data('font-name');
			var workshopname = $(this).data('workshop-name');
			var annee = $(this).data('workshop-annee');
			var invite = $(this).data('workshop-invite');
			var informations = $(this).data('workshop-informations');
			var date = $(this).find("h1").data('font-date');
			var telechargement = $(this).find("h1").data('font-lientelechargement');
			var auteur = $(this).find("h1").data('font-auteur');

			$('.fonttitle').html(name);
			$('.workshoptitle').html(workshopname);
			$('.anneeworkshop').html(annee);
			$('.inviteworkshop').html(invite);
			$('.workshoptexte').html(informations);
			$('.link-typo').attr('href', telechargement);
			$('.auteurfont').html(auteur);
  		});
});



