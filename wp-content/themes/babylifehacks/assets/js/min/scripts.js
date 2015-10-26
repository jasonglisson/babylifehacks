jQuery(document).foundation();

jQuery(document).ready(function($) {

		$('.top-blog-post').click(function(){
			$(this).find('a')[0].click();
		});
		
		$('.entry-content p').click(function(){
			$(this).next('a')[0].click();
		});					

});