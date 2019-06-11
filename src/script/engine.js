/* //////////////////////////////////////////////////////////////////////////////// */
/* //////////////////////////////////////////////////////////////////////// VAR /// */
/* //////////////////////////////////////////////////////////////////////////////// */


var resize_timeout;
var resize_interval = 400;

var deck = {};


/* //////////////////////////////////////////////////////////////////////////////// */
/* /////////////////////////////////////////////////////////////////////// INIT /// */
/* //////////////////////////////////////////////////////////////////////////////// */

/* ----------------------------------------------------------------------- INIT --- */
function init() {
	init_header();
	init_search();
	init_dropdown();
	init_datepicker();
    
	init_buy();

	deck_init();
}

$(init);



/* --------------------------------------------------------------------- BUYBUYBUBYBYUBUBUBY --- */
function init_buy() {
	$('.button.cc').on('click', function() {
		$('body').addClass('cc');
	});
	$('.button.apple').on('click', function(event) {
        
		event.stopPropagation();
		$('body').addClass('apple');
	});
	$('body').on('click', function() {
		$('body').removeClass('apple');
	});
}




/* --------------------------------------------------------------------- SEARCH --- */
function init_header() {
    
	$('header .toggle.nav').on('click', function() {
		if($('body').hasClass('view_nav')) {
			$('body').removeClass('view_nav');
		} else {
			$('body').removeClass('view_search').addClass('view_nav');
		}
	});
    
	$('header .toggle.search').on('click', function() {
		if($('body').hasClass('view_search')) {
			$('body').removeClass('view_search');
		} else {
			$('body').addClass('view_search');
			$('form.search input').trigger('focus');
		}
	});
    
	$(window).on('resize', function() {
		clearTimeout(resize_timeout);
		$('body').addClass('status_resize');
		resize_timeout = setTimeout(function(){ 
			$('body').removeClass('status_resize'); 
		}, resize_interval);
		$(window).trigger('scroll');
	});
    
    
	$('header button[type=submit]').on('click', function(event) {
		//event.stopPropagation();
        
		if($('body').hasClass('view_search') === false) {
			event.preventDefault();
			$('body').addClass('view_search');
			$('form.search input').trigger('focus');
		} 
        
        
		//        /$('body').removeClass('search_1');
	});
    
	$('form.search input').on('focus', function() {
		$('body').addClass('view_search');
	});
    
	$(document).on('click', function(event) {
		console.log(event.target);
		if ($('body').hasClass('view_search')) {
			if ( ($(event.target).parent().hasClass('search') === false) && ($(event.target).hasClass('search') === false)  ) {
				$('body').removeClass('view_search');
			}
		}
	});
    
    
    
	/*
    $('header > .toggle.nav').on('click', function(event) {
        event.stopPropagation();
        $('body').toggleClass('nav_1');
    });
    */
    
}

/* --------------------------------------------------------------------- SEARCH --- */
function init_search() {
    
	/*
    $('header .toggle.search').on('click', function(event) {
        event.stopPropagation();
        $('body').addClass('search_1').removeClass('nav_1');
        $('form.search input').trigger('focus');
    });
    */
    
    
    
	/* $('header button[type=reset]').on('click', function(event) {
        event.stopPropagation();
        $('body').removeClass('search_1');
    });
	
    $('form.search input').on('focus', function() {
		$('body').addClass('search_1').removeClass('nav_1');
	});
    
    $(document).on('click', function(event) {
		if ($(event.target).parent().hasClass('search')) return;
		$('body').removeClass('search_1');
	});
    */
    
	/*
    $('form.search input').on('focus', function() {
		$('body').addClass('search_1');
	});

	$('form.search').on('reset', function() {
		$(this).find('input').focus();
	});

    
	$(document).on('click', function(event) {
		if ($('body').hasClass('search_1')) return;
		//if ($(event.target).parent().hasClass('search')) return;
		$('body').removeClass('search_1');
	});
    
    //$('header form.search .toggle').on('click', function(event) {
    $('body:not(.search_1) .toggle.search').on('click', function(event) {
        event.stopPropagation();
        $('body').addClass('search_1');
    });
    $('form.search .toggle.nav').on('click', function(event) {
        event.stopPropagation();
        $('body').removeClass('search_1');
    });
    
    */
    
    
    
}

/* ------------------------------------------------------------------- DROPDOWN --- */
function init_dropdown() {
	$('.dropdown').on('click', function() {
		var this_dropdown = $(this);
		if (!this_dropdown.hasClass('active')) {
			$('.dropdown').removeClass('active');
			this_dropdown.addClass('active');
		} else {
			$('.dropdown').removeClass('active');
		}
	});

	$('.dropdown .area').on('click', function(event) {
		event.stopPropagation();
	});

	$(document).on('click', function(event) {
		var dropdown = $('.dropdown');
		var this_target = $(event.target);
		if (!dropdown.is(this_target) && dropdown.has(this_target).length === 0) {
			$('.dropdown').removeClass('active');
		}
	});
}

/* ----------------------------------------------------------------- DATEPICKER --- */
function init_datepicker() {
	$('[data-datepicker]').datepicker();
}


/* //////////////////////////////////////////////////////////////////////////////// */
/* /////////////////////////////////////////////////////////////////////// DECK /// */
/* //////////////////////////////////////////////////////////////////////////////// */

/* ----------------------------------------------------------------------- INIT --- */
function deck_init() {
	// control
	deck_control();
    
	// timer
	deck_timer();
}

/* -------------------------------------------------------------------- CONTROL --- */
function deck_control() {
	// listen for click event
	$('.deck, .gallery').on('click', '.control a', function() {
		var $deck;
		var length,
			index;

		// cache element
		$deck = $(this).closest('.deck, .gallery');

		// store number of cards
		length = ($deck.find('.card').length - 1);

		// store currently displayed card
		index = $deck.find('.card.display').index();

		// determine index
		if ($(this).hasClass('next')) index++;
		else if ($(this).hasClass('prev')) index--;

		// keep index within bounds
		if (index < 0) index = length;
		else if (index > length) index = 0;

		// toggle display class
		$deck.find('.card').removeClass('display');
		$deck.find('.card').eq(index).addClass('display');
        
		// toggle active class
		$deck.find('.dot a').removeClass('active');
		$deck.find('.dot a').eq(index).addClass('active');
	});
    
	// listen for click event
	$('.deck, .gallery').on('click', '.dot a', function() {
		var $deck;
		var index;

		// cache element
		$deck = $(this).closest('.deck, .gallery');

		// stored clicked index
		index = $(this).index();

		// toggle display class
		$deck.find('.card').removeClass('display');
		$deck.find('.card').eq(index).addClass('display');
        
		// toggle active class
		$deck.find('.dot a').removeClass('active');
		$deck.find('.dot a').eq(index).addClass('active');
	});
}

/* ---------------------------------------------------------------------- TIMER --- */
function deck_timer() {
    if ($('.deck, .gallery').length == 0) return;

	// start deck interval timer
	deck.timer = setInterval(function() {
		// trigger next card
		$('.deck .control .next, .gallery .control .next').trigger('click');
	}, 5000);
}
