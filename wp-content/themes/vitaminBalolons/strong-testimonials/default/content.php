<?php
/**
 * Template Name: Default
 * Description: The default template.
 */
?>
<?php do_action( 'wpmtst_before_view' ); ?>



		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="<?php wpmtst_post_class(); ?>">

			<div class="reviews-item">

                <div class="testimonial-all">
                    <?php wpmtst_the_thumbnail(); ?>
                    <?php wpmtst_the_client(); ?>
                </div>

				<div class="testimonial-content">
					<?php wpmtst_the_content(); ?>
					<?php do_action( 'wpmtst_after_testimonial_content' ); ?>
				</div>

			

			

				<?php do_action( 'wpmtst_after_testimonial' ); ?>
			</div>

		</div>
		<?php endwhile; ?>

		
