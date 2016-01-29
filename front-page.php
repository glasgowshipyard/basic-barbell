<?php
/**
 * The main motherfucking front page template file.
 *
 * @package BasicBarbell_
 */

get_header(); ?>

	<div id="primary" class="content-area front">
		<main id="main" class="site-main" role="main">

		<section id="what">
				<div class="indent">
						<?php 
						$query = new WP_Query( 'pagename=what' );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
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
		
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						echo '<h2 class="section-title">' . get_the_title() . '</h2>';
						echo '<div class="entry-content">';
						the_content('');
						echo '</div>';
					}
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
