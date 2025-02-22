(function ($) {
	
	"use strict";

	// Page loading animation
	$(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });


	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height() + 250;
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	})

	$('.owl-banner').owlCarousel({
	  center: true,
      items:1,
      loop:true,
      nav: true,
	  dots:true,
	  navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      margin:30,
      responsive:{
        992:{
            items:1
        },
		1200:{
			items:1
		}
      }
	});

	var width = $(window).width();
		$(window).resize(function() {
		if (width > 767 && $(window).width() < 767) {
			location.reload();
		}
		else if (width < 767 && $(window).width() > 767) {
			location.reload();
		}
	})

	const elem = document.querySelector('.properties-box');
	const filtersElem = document.querySelector('.properties-filter');
	if (elem) {
		const rdn_events_list = new Isotope(elem, {
			itemSelector: '.properties-items',
			layoutMode: 'masonry'
		});
		if (filtersElem) {
			filtersElem.addEventListener('click', function(event) {
				if (!matchesSelector(event.target, 'a')) {
					return;
				}
				const filterValue = event.target.getAttribute('data-filter');
				rdn_events_list.arrange({
					filter: filterValue
				});
				filtersElem.querySelector('.is_active').classList.remove('is_active');
				event.target.classList.add('is_active');
				event.preventDefault();
			});
		}
	}


	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 80
				}, 700);
				return false;
			}
		}
	});


	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});

	$("a").click(function(){
		var id = $(this).attr('id');

		if (id != undefined){

	    $('*[id*=filter]:visible').each(function(index, value) {
		    $("#"+ value.id + "").removeClass("is_active");
	    });

	    $("#"+ id + "").addClass("is_active");

	    $('*[id*=realestate]:visible').each(function(index, value) {
		    $("#"+ value.id + "").hide();
	    });
        
		var selectedId = id.split("filter")[0];
		var finalSelectedId = "";

		if(selectedId === "houses"){
			finalSelectedId = "house";
		}
		else if(selectedId === "rlest"){
			finalSelectedId = "realestate";
		}
		else if(selectedId === "flats"){
			finalSelectedId = "flat";
		}
		else if(selectedId === "cottages"){
			finalSelectedId = "cottage";
		}
		else if(selectedId === "parcels"){
			finalSelectedId = "parcel";
		}
		else if(selectedId === "villages"){
			finalSelectedId = "village";
		}
		else if(selectedId === "issuingb"){
			finalSelectedId = "issuing";
		}
		else if(selectedId === "apartments"){
			finalSelectedId = "apartment";
		}
		else if(selectedId === "replacements"){
			finalSelectedId = "replacement";
		}

		$('*[id*='+ finalSelectedId + ']:hidden').each(function(index, value) {
		    $("#"+ value.id + "").show();
	    });
	   }
    });

})(window.jQuery);

function collapseDivs(){
	var coll = document.getElementsByClassName("content1");
	var i;
	var isCollapsed = 1; 

    for (i = 0; i < coll.length; i++) {
	   var element = coll[i];
       if (element.style.display === "block") {
		  element.style.display = "none";
       } else {
		  element.style.display = "block";
		  isCollapsed = 0;
       }
    };

  var arrowImage = document.getElementById("collapseArrowId");
  if (isCollapsed === 1){
	arrowImage.src="assets/images/2019/arrow-down.jpg";
  }
  else {
	arrowImage.src="assets/images/2019/arrow-up.jpg";
  }
}

$("#btnScrollToTop").on("click", function(){
    window.scrollTo({
        top: 0,
		left: 0,
		behaviour: "smooth"
	});
});