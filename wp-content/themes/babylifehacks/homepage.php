<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content">
				<div id="top-post-wrap">
					<div id="top-post" class="row">		
					<?php
						//$args = array( 'post_type' => 'post', 'post_per_page' => 1);
						$loop = new WP_Query( array( 'posts_per_page' => 3) );
							//print_r($loop);
							while ( $loop->have_posts() ) : $loop->the_post();
							    $category = get_the_category($post->ID);
								foreach($category as $cat) {
									echo '<div class="top-blog-post large-4 medium-4 columns ' . $cat->slug . '">';												
									my_excerpt(25);
									echo '</div>';															
								}
							endwhile; 
							wp_reset_postdata();
						?>								
				</div>	
				</div>	
				<div id="inner-content" class="row">

				    <?php get_sidebar('sidebar1'); ?>
				   <?php // get_sidebar('sidebar2'); ?>				    
			
				    <div id="main" class="large-9 medium-9 columns" role="main">
					
						<?php 
						$args = array( 'post_type' => 'post', 'posts_per_page' => -1);
						$loop = new WP_Query( $args );
						$submitted = get_field('submitted_by');
							//print_r($loop);
							while ( $loop->have_posts() ) : $loop->the_post();
							    $category = get_the_category($post->ID);
								foreach($category as $cat) {
									echo '<div class="entry-content post ' . $cat->slug . ' row">';	
										echo '<div class="post-icon large-2 hide-for-medium hide-for-small columns"><i title="' . $cat->name . '"></i><span>' . $cat->name . '</span></div>';
										echo '<div class="post-text large-10 medium-12 small-12 columns">';		
											my_excerpt(35);	
											echo do_shortcode('[simple-social-share]');
											echo '<a class="tweet" href="https://twitter.com/intent/tweet?text=' . substr(strip_tags(get_the_content()),0,75) . '...&hashtags=babylifehacks&url=' . wp_get_shortlink() . '" target="_blank">Tweet</a>';
											echo '<a class="mail" href="mailto:?subject=' . substr(strip_tags(get_the_content()),0,75) . '...&amp;body=' . substr(strip_tags(get_the_content()),0,75) . '...Read the rest of this tip on BabyLifeHacks.com here: ' . wp_get_shortlink() . '">Mail</a>';
										echo '</div>';
									echo '</div>';															
								}							    							
							endwhile; 
						?>	
					    					
    				</div> <!-- end #main -->
    
				    <?php // get_sidebar('sidebar2'); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>