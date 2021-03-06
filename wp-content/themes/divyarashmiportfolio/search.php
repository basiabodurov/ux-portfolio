<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */
 ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="content">
				<div class="content-wrapper">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div> <!-- .content-wrapper -->
</div><!-- .content-->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
