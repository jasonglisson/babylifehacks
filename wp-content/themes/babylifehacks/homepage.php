<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content">	
				<div id="top-post-wrap" class="show-for-large-up">
					<div id="top-post" class="row">
						<ul class="small-block-grid-2 large-block-grid-4">
					<?php
						$posts = wmp_get_popular(array( 'limit' => 4, 'post_type' => 'post', 'range' => 'all_time' ));
						
						// Display the widget
						echo $before_widget;
						global $post;
						foreach ( $posts as $post ):
							setup_postdata( $post );
							$category = get_the_category($post->ID);
							foreach($category as $cat) {
								echo '<li class="top-blog-post large-4 medium-4 columns ' . $cat->slug . '">';	
									echo '<a href="' . get_permalink($post->ID) . '"></a>';								
									echo '<div class="post-icon large-3 hide-for-medium hide-for-small columns"><i title="' . $cat->name . '"></i></div>';							
									echo '<div class="columns top-post-text large-9">';										
										my_excerpt(13);			
									echo '</div>';
								echo '</li>';	
							}										
						endforeach;
						echo $after_widget;
						
						// Reset post data
						wp_reset_postdata();
				
					?>
						</ul>					
					</div>	
				</div>				
				<div id="inner-content" class="row">

				    <?php get_sidebar('sidebar1'); ?>
				   <?php // get_sidebar('sidebar2'); ?>				    
			
				    <div id="main" class="large-9 medium-9 columns" role="main">					    
						<dl class="sub-nav filter">
							<?php // get_search_form();?>
						  <div class="filter-wrap">
							  <dt>View By Most:</dt>
							  <dd class="active"><a href="/">Recent</a></dd>
							  <dd><a href="/popular">Popular</a></dd>
						  </div>	  
						</dl>						
						<?php 
						$loop= new WP_Query( array( 'posts_per_page' => -1) );
						//$loop = new WP_Query( $args );
							//print_r($loop);
							while ( $loop->have_posts() ) : $loop->the_post();
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
											echo '<a class="tweet" href="https://twitter.com/intent/tweet?text=' . substr(strip_tags(get_the_content()),0,65) . '...&hashtags=babylifehacks,parenting,parentingtips&url=' . wp_get_shortlink() . '" target="_blank">Tweet</a>';
											echo '<a class="mail" href="mailto:?subject=' . substr(strip_tags(get_the_content()),0,75) . '...&amp;body=' . substr(strip_tags(get_the_content()),0,75) . '...Read the rest of this tip on BabyLifeHacks.com here: ' . wp_get_shortlink() . '">Mail</a>';
											echo '<div class="url"><a href="' . wp_get_shortlink() . '" target="_blank"><span title="' . wp_get_shortlink() . '"></span></a></div>';
											echo '<div class="comments">Comments: <fb:comments-count href="' . get_permalink($post->ID) . '"></fb:comments-count></div>';
											$image = get_field('hack_image', $post->ID);
											//print_r($image);
											if( !empty($image) ): ?>
												<a class="hack-image-link" href="<?php echo get_permalink($post->ID); ?>"><img class="hack-image" src="<?php echo $image['url']; ?>" alt="<?php echo substr(strip_tags(get_the_content()),0,75); ?>" /></a>
											<?php endif;												
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