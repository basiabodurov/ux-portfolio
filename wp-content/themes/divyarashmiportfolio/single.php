<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header( 'index' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="content">
				<!-- <div class="content-wrapper"> -->

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="single-project-navigation">
			<?php the_post_navigation( array(
								'prev_text' => '<i class="fa fa-caret-left"></i> <span class="previous">Previous</span>',
								'next_text' => '<span class="next">Next</span> <i class="fa fa-caret-right"></i>',
						) ); ?>
				</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>


	<!-- </div> <!-- .content-wrapper -->
</div><!-- .content-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
