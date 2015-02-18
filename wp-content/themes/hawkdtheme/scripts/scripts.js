$(document).ready(function(){

	// push down content
	$("#container").css("top", $("#header").outerHeight() + "px");

	// Toggle article content
	$(".entry-content").hide();
	$(".panel-heading").click(function() {
		$(this).siblings(".entry-content").toggle(400);
		var arrow = $(this).find("span");
		arrow.toggleClass("glyphicon-chevron-right");
		arrow.toggleClass("glyphicon-chevron-down");
	})

	$(".faq-nav a").click(function(event){
    	event.preventDefault();
    	var postId = this.className.replace('faq_', '');
    	$(".post-" + postId + " .entry-content").toggle(400);
	});
});

// push down content 
$(window).resize(function() {
	$("#container").css("top", $("#header").outerHeight() + "px");
});