<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
				
				    <div id="main" class="large-8 medium-8 columns first" role="main">
					    
				    	<header>
				    		<h1 class="page-title"><?php the_archive_title();?></h1>
							<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
				    	</header>
				
				    	<!-- To see additional archive styles, visit the /parts directory -->
				    	<?php //get_template_part( 'parts/loop', 'archive' ); ?>	
						<?php while ( have_posts() ) : the_post(); 
					
								$category = get_the_category($post->ID);
									foreach($category as $cat) {
										echo '<div class="entry-content post ' . $cat->slug . ' row">';	
											echo '<div class="post-icon large-2 hide-for-medium hide-for-small columns"><i title="' . $cat->name . '"></i><span class="icon-text">' . $cat->name . '</span><div class="hack-num">#' . $post->ID . '</div></div>';
											echo '<div class="post-text large-10 medium-12 small-12 columns">';	
												echo '<a href="' . get_permalink($post->ID) . '">' . my_excerpt(35) . '</a>';
												if (get_field('submitted_by', $post->ID)) {
													echo '<div class="submitted-wrap"><div class="submitted-by">Submitted By ' . get_field('submitted_by', $post->ID) . '</div></div>';		
												}												
												echo do_shortcode('[simple-social-share]');
												echo '<a class="tweet" href="https://twitter.com/intent/tweet?text=' . substr(strip_tags(get_the_content()),0,75) . '...&hashtags=babylifehacks,parenting,parentingtips&url=' . wp_get_shortlink() . '" target="_blank">Tweet</a>';
												echo '<a class="mail" href="mailto:?subject=' . substr(strip_tags(get_the_content()),0,75) . '...&amp;body=' . substr(strip_tags(get_the_content()),0,75) . '...Read the rest of this tip on BabyLifeHacks.com here: ' . wp_get_shortlink() . '">Mail</a>';
												echo '<div class="url"><a href="' . wp_get_shortlink() . '" target="_blank"><span title="' . wp_get_shortlink() . '"></span></a></div>';
												echo '<div class="comments">Comments: <fb:comments-count href="' . get_permalink($post->ID) . '"></fb:comments-count></div>';	
												$image = get_field('hack_image', $post->ID);												
												if( !empty($image) ): ?>
													<a class="hack-image-link" href="<?php echo get_permalink($post->ID); ?>"><img class="hack-image" src="<?php echo $image['url']; ?>" alt="<?php echo substr(strip_tags(get_the_content()),0,75); ?>" /></a>
												<?php endif;												
											echo '</div>';
										echo '</div>';															
								} ?>			
					
						<?php endwhile; ?>					    					
			
    				</div> <!-- end #main -->
    
	    			<?php get_sidebar(); ?>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>