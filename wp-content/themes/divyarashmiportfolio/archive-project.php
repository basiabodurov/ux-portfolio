<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page-title"><h1>Projects</h1></div>
						<div class="content">
							<div class="content-wrapper">
<p>Suspendisse in consequat nunc. Vivamus tincidunt consectetur imperdiet. Nunc scelerisque felis eget mattis pharetra. Etiam tempus est sed rhoncus fringilla. Donec vulputate purus diam, eget eleifend enim convallis et. Pellentesque imperdiet nisi vel aliquam semper. Integer ut magna ac felis ultricies sagittis.</p>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				 <div class="project-grid-item">

					 <div class="image-overlay">
					 <?php if ( has_post_thumbnail() ) : ?>
									 <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'medium' ); ?></a>
							</div>

							<span><?php the_title( '<h1 class="project-title">', '</h1>' ); ?></span>

								<?php endif; ?>
				 </div><!--  end project-grid-item -->

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div> <!-- .content-wrapper -->
	</div><!-- .content-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
