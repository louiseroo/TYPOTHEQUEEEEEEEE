$(function() {
	function getRandom(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	var container = $('#conteneur'); // Container
	var nodes = container.children(); // All children
	for (var i = 1; i < nodes.length; i++) {
		  // Move random child to the end
		  container.append(nodes.eq(Math.floor(Math.random() * nodes.length)));
	}

	$(".entree-font").each(function(){
		$(this).css('margin-left', getRandom(0, 1000)+"px");
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

		var oldclass;
		var oldcasse;

		// $("div#conteneur.zoom-conteneur").on('click', function(e){
		// 	console.log(e);
		// });
		$('body').click(function (event) {
			if (!$(event.target).is('h1') && !$(event.target).is('h2') && !$(event.target).is('h5')  && !$(event.target).is('span')  && !$(event.target).is('p')  && !$(event.target).is('.btn')  && !$(event.target).is('img')) {
				$('.header-panel-font').slideUp();
				$('.entree-font').removeClass('low-opacity');
			}
		 });
		
  		$('.entree-font').on('click', function(e){
			
			// if (e.target === e.currentTarget){
			// 	alert('o');
			// 	$('.header-panel-font').slideUp();
			// 	$('.entree-font').removeClass('low-opacity');
			// }else{
			$('.fonttitle').removeClass(oldclass);
			$('.fonttitle').removeClass(oldcasse);

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
			var classfont = $(this).find("h1").attr('class');
			var casse = $(this).data('casse');

			$('.fonttitle').html(name);
			$('.workshoptitle').html(workshopname);
			$('.anneeworkshop').html(annee);
			$('.inviteworkshop').html(invite);
			$('.workshoptexte').html(informations);
			$('.link-typo').attr('href', telechargement);
			$('.auteurfont').html(auteur);
			$('.fonttitle').addClass(classfont);
			$('.fonttitle').addClass(casse);

			oldclass=classfont;
			oldcasse=casse;
		// }
  		});
});



