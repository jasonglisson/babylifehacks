<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">

				    <?php get_sidebar('sidebar1'); ?>
			
				    <div id="main" class="large-5 medium-5 columns" role="main">
					
					    	<?php get_template_part( 'parts/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
    
				    <?php get_sidebar('sidebar2'); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>