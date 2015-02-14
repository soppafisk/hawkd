$(document).ready(function(){

	$(".entry-content").hide();
	$("article.faq").click(function() {
		$(this).children(".entry-content").toggle(400);
	})

	$(".faq-nav a").click(function(event){
    	event.preventDefault();
    	var postId = this.className.replace('faq_', '');
    	$(".post-" + postId + " .entry-content").toggle(400);
	});
});