$(document).ready(function(){

	// hamburger menu
	if ($(window).width() < 730) {
		miniMenu();
	}
	if ($(window).width() > 730) {
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
		var arrow = $(this).find("span");
		arrow.toggleClass("glyphicon-chevron-right");
		arrow.toggleClass("glyphicon-chevron-down");
	})

	$(".faq-nav a").click(function(event){
    	event.preventDefault();
    	$(".entry-content").hide(400);
    	var postId = this.className.replace('faq_', '.post-');
    	var arrow = $(postId).find("span");
		arrow.toggleClass("glyphicon-chevron-right");
		arrow.toggleClass("glyphicon-chevron-down");
    	$(postId + " .entry-content").show(400);
	});
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