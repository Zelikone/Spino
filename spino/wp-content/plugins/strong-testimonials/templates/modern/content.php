<?php
/**
 * Template Name: Modern
 * Description: A modern template designed for slideshows or single testimonials. Looks great with manual or automatic excerpts.
 * Styles: wpmtst-font-awesome
 */
?>


		<?php while ( $query->have_posts() ) : $query->the_post(); ?>


					



					<div class="reviews-slide">
						<div class="reviews-container row">
							<div class="col col-img">
								<div class="reviews-img">
									<?php wpmtst_the_thumbnail(); ?>
								</div>
							</div>
							<div class="col col-desc">
								<?php wpmtst_the_client(); ?>

								<div class="reviews-text">
									<?php wpmtst_the_content(); ?>
								</div>
							</div>
						</div>
					</div>





		<?php endwhile; ?>























<?php do_action( 'wpmtst_after_view' ); ?>
