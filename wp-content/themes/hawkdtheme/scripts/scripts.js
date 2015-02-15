$(document).ready(function(){

	// Toggle article content
	$(".entry-content").hide();
	$("article.faq").click(function() {
		$(this).children(".entry-content").toggle(400);
		var arrow = $(this).children("h1").children();
		arrow.toggleClass("glyphicon-chevron-right");
		arrow.toggleClass("glyphicon-chevron-down");
	})

	$(".faq-nav a").click(function(event){
    	event.preventDefault();
    	var postId = this.className.replace('faq_', '');
    	$(".post-" + postId + " .entry-content").toggle(400);
	});
});