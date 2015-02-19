$(document).ready(function(){

	// hamburger menu
	var windowWidth = $(window).width();
	if (windowWidth < 730) {
		miniMenu();
	}
	if (windowWidth > 730) {
		bigMenu();
	}

	$("#hamburgerDiv").click(function() {
		$(".menu-main-nav-container").toggleClass("expanded");
	});

	$(".menu-main-nav-container a").click(function() {
		$(".menu-main-nav-container").removeClass("expanded");
	});

	// push down content
	$("#container").css("top", $("#header").outerHeight() + "px");

	// Toggle article content
	$(".entry-content").hide();
	$(".panel-heading").click(function() {
		$(".entry-content").hide(400);
		$(this).siblings(".entry-content").show(400);
		var arrow = $(this).find(".glyphicon");
		$(".glyphicon").removeClass("glyphicon-chevron-down");
    	$(".glyphicon").addClass("glyphicon-chevron-right");
    	arrow.removeClass("glyphicon-chevron-right");
		arrow.addClass("glyphicon-chevron-down");
	})

	$(".faq-nav a").click(function(event){
    	event.preventDefault();
    	$(".entry-content").hide(400);
    	$(".glyphicon").removeClass("glyphicon-chevron-down");
    	$(".glyphicon").addClass("glyphicon-chevron-right");

    	var postId = this.className.replace('faq_', '.post-');
    	var arrow = $(postId).find("span");
    	arrow.removeClass("glyphicon-chevron-right");
		arrow.addClass("glyphicon-chevron-down");
    	$(postId + " .entry-content").show(400);
	});

	// soft scroll
	var hash = window.location.hash;
	var search = window.location.search;
	if ( (hash.indexOf("#") >= 0 || hash == "") && search == "" ) {
		$('a[href*=#]').on('click', function(event){   
			event.preventDefault();
			if (this.hash == "") {
			    $('html,body').animate({
			    	scrollTop: 0
			    }, 500);
			} else {
				console.log(this.hash);
			    $('html,body').animate({
			    	scrollTop:$(this.hash).offset().top-($("#header").outerHeight())
			    }, 500);
			}
		});
	}


}); // document ready

// push down content 
$(window).resize(function() {
	$("#container").css("top", $("#header").outerHeight() + "px");

	if ($(window).width() < 730) {
		miniMenu();
	}

	if ($(window).width() > 730) {
		bigMenu();
	}
});


function miniMenu() {
	$("#hamburgerDiv").show();
	$(".menu-main-nav-container").hide();
}

function bigMenu() {
	$("#hamburgerDiv").hide();
	$(".menu-main-nav-container").show();
}