<?php
/**
 * The main motherfucking front page template file.
 *
 * @package BasicBarbell_
 */

get_header(); ?>
	<?php
		global $more;
	?>
	<div id="primary" class="content-area-front">
		<main id="main" class="site-main-front" role="main">
		
		<section id="call-to-action" class="call-to-action-background-image" style="background-image: url(<?php header_image(); ?>)"><!-- This is the header and call to action split -->
				<div class="indent">
					<?php if ( dynamic_sidebar('front-left') ) : else : endif; ?>
					<?php if ( dynamic_sidebar('front-right') ) : else : endif; ?>
				</div>
			</section>

		<section id="what">
				<div class="indent">
						<?php 
						$query = new WP_Query( 'pagename=what' );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								$more = 0;
								echo '<h2 class="section-title">' . get_the_title() . '</h2>';

								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}
						
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</div><!-- .indent -->
		</section><!-- #what -->
		
		<section id="testimonials">
			<div class="indent">
				Testimonials
			</div>
		</section>
		
		<section id="why">
				<div class="indent">
						<?php 
						$query = new WP_Query( 'pagename=why' );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								$more = 0;
								echo '<h2 class="section-title">' . get_the_title() . '</h2>';
								echo '<div class="entry-content">';
								the_content();
								echo '</div>';
							}
						}
						
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
				</div><!-- .indent -->
		</section><!-- #why -->

		<section id="how">
			<div class="indent">
				<?php 
				$query = new WP_Query( 'pagename=how' );
		$programs_id = $query->queried_object->ID;
			
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							$more = 0;
							echo '<h2 class="section-title">' . get_the_title() . '</h2>';
							echo '<div class="entry-content">';
							the_content('');
							echo '</div>';
						}
					}
			
					/* Restore original Post Data */
					wp_reset_postdata();
			
					$args = array(
						'post_type' => 'page',
						'post_parent' => $programs_id
					);
					$programs_query = new WP_Query( $args );
					
					// The Loop
					if ( $programs_query->have_posts() ) {
						
						echo '<ul class="programs-list">';
						while ( $programs_query->have_posts() ) {
							$programs_query->the_post();
							$more = 0;
							echo '<li class="clear">';
							echo '<a href="' . get_permalink() . '" title="Learn more about ' . get_the_title() . '">';
							echo '<h3 class="programs-title">' . get_the_title() . '</h3>';
							echo '</a>';
							echo '<div class="programs-lede">';
							the_content();
							echo '</div>';
							echo '</li>';
						}
						echo '</ul>';
					}
			
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div><!-- .indent -->
		</section><!-- #how -->

<section id="who">
	<div class="indent">
		<?php 
		$query = new WP_Query( 'pagename=who' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$more = 0;
				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div><!-- .indent -->
</section><!-- #who -->

<section id="ask">
	<div class="indent">
		<?php 
		$query = new WP_Query( 'pagename=ask' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$more = 0;
				echo '<h2 class="section-title">' . get_the_title() . '</h2>';
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			}
		}

		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	</div><!-- .indent -->
</section><!-- #ask -->		
</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
