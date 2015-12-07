<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="page-title"><h1><?php echo esc_html( CFS()->get( 'project_name' ) ); ?></h1></div>
						<div class="content">
							<div class="content-wrapper">

<h2><?php echo esc_html( CFS()->get( 'challenge' ) ); ?></h2>
<p><?php echo esc_html( CFS()->get( 'challenge_description' ) ); ?></p>

<h2><?php echo esc_html( CFS()->get( 'case_study' ) ); ?></h2>

<div class="single-project-image"><?php
$attachment_id = 30; // attachment ID
$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
if( $image_attributes ) {
?>
<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
<?php } ?>
</div>

<p><?php echo esc_html( CFS()->get( 'case_study_caption' ) ); ?></p>

<h2><?php echo esc_html( CFS()->get( 'action' ) ); ?></h2>

<div class="single-project-image"><?php
$attachment_id = 30; // attachment ID
$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
if( $image_attributes ) {
?>
<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
<?php } ?>
</div>

<p><?php echo esc_html( CFS()->get( 'action_caption' ) ); ?></p>

<h2><?php echo esc_html( CFS()->get( 'solution' ) ); ?></h2>

<div class="single-project-image"><?php
$attachment_id = 30; // attachment ID
$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
if( $image_attributes ) {
?>
<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
<?php } ?>
</div>

<p><?php echo esc_html( CFS()->get( 'solution_caption' ) ); ?></p>



		<div class="single-project-navigation">
		<?php the_post_navigation( array(
							'prev_text' => '<i class="fa fa-caret-left"></i> Previous',
		    			'next_text' => 'Next <i class="fa fa-caret-right"></i>',
					) ); ?>
			</div>

					</div> <!-- .content-wrapper -->
				</div><!-- .content-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
