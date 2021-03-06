<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header( 'navonly' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="content">
				<div class="content-wrapper grid-top-spaceAround">

				<?php if ( have_posts() ) : ?>

			<header class="page-header">

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/blogarchive' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

			</div> <!-- .content-wrapper -->
		</div><!-- .content-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
