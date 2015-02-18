$(document).ready(function(){

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
});

// push down content 
$(window).resize(function() {
	$("#container").css("top", $("#header").outerHeight() + "px");
});