<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row">
			
					<div id="main" class="large-8 medium-8 columns first" role="main">
						<h3>Baby Life Hack #<?php echo the_ID();
							if (get_field('submitted_by', $post->ID)) { 
								echo ' - Submitted By ' . get_field('submitted_by', $post->ID);
							}?>
						</h3>
					<?php
						echo '<div class="main">' . wp_strip_all_tags(get_the_content()) . '<br>';
						$image = get_field('hack_image', $post->ID);
						//print_r($image);
						if( !empty($image) ): ?>
							<a class="hack-image-link" href="<?php echo get_permalink($post->ID); ?>"><img class="hack-image" src="<?php echo $image['url']; ?>" alt="<?php echo substr(strip_tags(get_the_content()),0,75); ?>" /></a>
						<?php endif; 					
						echo '</div><br>';	
						echo do_shortcode('[simple-social-share]');
						echo '<a class="tweet" href="https://twitter.com/intent/tweet?text=' . substr(strip_tags(get_the_content()),0,75) . '...&hashtags=babylifehacks,parenting,parentingtips&url=' . wp_get_shortlink() . '" target="_blank">Tweet</a>';
						echo '<a class="mail" href="mailto:?subject=' . substr(strip_tags(get_the_content()),0,75) . '...&amp;body=' . substr(strip_tags(get_the_content()),0,75) . '...Read the rest of this tip on BabyLifeHacks.com here: ' . wp_get_shortlink() . '">Mail</a>';
						echo '<div class="url"><a href="' . wp_get_shortlink() . '" target="_blank"><span title="' . wp_get_shortlink() . '"></span></a></div><br><br>';
						echo do_shortcode('[fbcomments]');
					?>
					
					</div> <!-- end #main -->
    
					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>