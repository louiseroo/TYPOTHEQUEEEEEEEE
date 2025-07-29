$(function() {
	function getRandom(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}



// Position aléatoire en hauteur
var container = $('#conteneur'); // Container
var nodes = container.children(); // All children
for (var i = 1; i < nodes.length; i++) {
    // Move random child to the end
    container.append(nodes.eq(Math.floor(Math.random() * nodes.length)));
}

// Position aléatoire en largeur et hauteur
$(".entree-font").each(function(){
    $(this).css('left', getRandom(0, 65) + "vw");

    // Top aléatoire entre 5vh et 95vh
    $(this).css('top', getRandom(5, 95) + "vh");
});

// Fonction utilitaire : random entre min et max
function getRandomIndex(array) {
    return Math.floor(Math.random() * array.length);
}

const $container = $("#conteneur");
const containerHeight = $container.height();
const containerWidth = $container.width();
const lineHeight = 20; // 20px entre chaque ligne

// Liste des lignes possibles (0, 20, 40, ..., jusqu'à la hauteur du conteneur)
let availableLines = [];
for (let y = 0; y <= containerHeight - lineHeight; y += lineHeight) {
    availableLines.push(y);
}

$(".entree-font").each(function() {
    const $el = $(this);
    
    if (availableLines.length === 0) {
        console.warn("Plus de lignes disponibles !");
        return;
    }

    // Prendre une ligne au hasard et la retirer
    const index = getRandomIndex(availableLines);
    const topPx = availableLines.splice(index, 1)[0];

    // Calcul de la position horizontale aléatoire dans les limites du conteneur
    const elWidth = $el.outerWidth(true);
    const maxLeft = containerWidth - elWidth;
    const leftPx = Math.random() * maxLeft;

    $el.css({
        position: "absolute",
        top: topPx + "px",
        left: leftPx + "px"
    });
});




	//position des ascii
	var circ = document.querySelectorAll('.entree-ascii');
	var newq;
	let h,w,nh,nw,s; 

	function newPosition(){   
		h = window.innerHeight - 50;
		w = window.innerWidth - 50;
		nh = Math.floor(Math.random() * h);
		nw = Math.floor(Math.random() * w);
		return [nh,nw];       
	  }

	
	
		circ.forEach(function circ(myclass) {
			var newq = newPosition();
			$(myclass).css({ 
			  top: newq[0], left: newq[1] 
			});
		  });




$('.infos-panel').on('click', function(e) {
    e.stopPropagation(); // évite les effets secondaires de clic

    if ($('.infos-panel-description').is(':visible')) {
        $('.infos-panel-description').stop(true, true).slideUp();
    } else {
        $('.credits-panel-description, .header-panel-font').stop(true, true).slideUp();
        $('.infos-panel-description').stop(true, true).slideDown();
    }
});

$('.credits-panel').on('click', function(e) {
    e.stopPropagation();

    if ($('.credits-panel-description').is(':visible')) {
        $('.credits-panel-description').stop(true, true).slideUp();
    } else {
        $('.infos-panel-description, .header-panel-font').stop(true, true).slideUp();
        $('.credits-panel-description').stop(true, true).slideDown();
    }
});


$('.entree-font').on('click', function(e) {
    e.stopPropagation();

    // Ferme les autres panels s'ils sont ouverts
    $('.credits-panel-description, .infos-panel-description').stop(true, true).slideUp();

    // Ouvre .header-panel-font (même s'il est déjà ouvert : aucune importance)
    $('.header-panel-font').stop(true, true).slideDown();
});


		var oldclass;
		var oldcasse;




		$('body').click(function (event) {
			const $target = $(event.target);
			const isConteneur = $target.closest('#conteneur').length > 0;
			const isInfos = $target.closest('.infos-descriptions').length > 0;
			const isCredits = $target.closest('.credits-descriptions').length > 0;
			const isHeader = $target.closest('.header-panel-font').length > 0;

			if (isConteneur) {
				// Clic sur #conteneur : on ferme tout
				$('.infos-panel-description, .credits-panel-description, .header-panel-font').slideUp();
				$('.entree-font').removeClass('low-opacity');
			} else if (isInfos) {
				// Clic sur .infos-descriptions : on ferme les autres
				$('.credits--panel-description, .header-panel-font').slideUp();
				$('.entree-font').removeClass('low-opacity');
			} else if (isCredits) {
				// Clic sur .credits-descriptions : on ferme les autres
				$('.infos-panel-description, .header-panel-font').slideUp();
				$('.entree-font').removeClass('low-opacity');
			} else if (isHeader) {
				// Clic sur .header-panel-font : on ferme les autres
				$('.infos-panel-description, .credits-panel-description').slideUp();
				$('.entree-font').removeClass('low-opacity');
			}
		});






		// affichage des contenus
		// quand on clique sur une typographie, 
  		$('.entree-font').on('click', function(e){
			
			$('.fonttitle').removeClass(oldclass);
			$('.fonttitle').removeClass(oldcasse);

		// on masque tous les éléments de classe ".panel" (effet glisse vers le haut)
		// on affiche le paneau ".header-panel-font" (effet glisse vers le bas)
  			$('.header-panel-font').slideDown(300);
  			$('.entree-font').addClass('low-opacity');
			$(this).removeClass('low-opacity');

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









  		// zooms de la page
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
		$('.zoom-out').on('click', function(){
			if (zoom > 1){
				zoom -= 0.3;
			$('.target').css('transform', 'scale(' + zoom + ')');
		}
		});


});



