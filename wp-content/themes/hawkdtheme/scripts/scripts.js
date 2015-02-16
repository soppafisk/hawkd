$(document).ready(function(){

	// Toggle article content
	$(".entry-content").hide();
	$("article.faq").click(function() {
		$(this).find(".entry-content").toggle(400);
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