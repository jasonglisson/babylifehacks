jQuery(document).foundation();

jQuery(document).ready(function($) {

		$('.top-blog-post').click(function(){
			$(this).find('a')[0].click();
		});

});