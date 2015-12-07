<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="wrapper">
				<?php the_post_thumbnail( 'large' ); ?>

					<div class="intro">
						<h2><?php echo esc_html( CFS()->get( 'welcome_text' ) ); ?></h2>
						<span class="city"><i class="fa fa-map-marker"></i>Vancouver</span>
						<span class="mail"><a href="mailto:divyarashmi19@gmail.com"><i class="fa fa-comment"></i>divyarashmi19@gmail.com</a></span>
					</div>

					<div class="landing-page-btns">
								<a href="<?php echo get_post_type_archive_link( 'project' ); ?>"><button class="blue">Projects</button></a>
								<a href="http://divyarashmi.com/wp-content/uploads/2015/11/resume.jpg"><button class="grey">Download Resume</button></a>
						</div>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php endwhile; // End of the loop. ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
