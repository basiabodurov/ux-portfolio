<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="page-title"><h1>About me</h1></div>
			<div class="content">
				<div class="content-wrapper">
<h2><?php echo esc_html( CFS()->get( 'title' ) ); ?></h2>
<p><?php echo esc_html( CFS()->get( 'extra_info_1' ) ); ?></p>
<h2><?php echo esc_html( CFS()->get( 'facts' ) ); ?></h2>

<div class="interest-section-flex-container">
<div class="interest-image"><?php
	$attachment_id = 40; // attachment ID
	$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
	if( $image_attributes ) {
	?>
	<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
	<?php } ?>
<p><?php echo esc_html( CFS()->get( 'image_caption1' ) ); ?></p>
</div><!-- interest-image -->

<div class="interest-image"><?php
	$attachment_id = 40; // attachment ID
	$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
	if( $image_attributes ) {
	?>
	<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
	<?php } ?>
<p><?php echo esc_html( CFS()->get( 'image_caption2' ) ); ?></p>
</div><!-- interest-image -->

<div class="interest-image"><?php
	$attachment_id = 40; // attachment ID
	$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
	if( $image_attributes ) {
	?>
	<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
	<?php } ?>
<p><?php echo esc_html( CFS()->get( 'image_caption3' ) ); ?></p>
</div><!-- interest-image -->

</div><!-- flex grid for interest image ends -->

<div="skills"><h2><?php echo esc_html( CFS()->get( 'skills' ) ); ?></h2></div>

<!-- Animated skillbars -->
<div class="skills-section-container">

	<div class="skillbars-wrapper">
		<div class="skillbar clearfix " data-percent="50%">
			<div class="skillbar-title" style="background: #25b5f1;"><span>Public Speaking</span></div>
			<div class="skillbar-bar" style="background: #25b5f1;"></div>
			<div class="skill-bar-percent">50%</div>
		</div> <!-- End Skill Bar -->

		<div class="skillbar clearfix " data-percent="70%">
			<div class="skillbar-title" style="background: #25b5f1;"><span>Communication</span></div>
			<div class="skillbar-bar" style="background: #25b5f1;"></div>
			<div class="skill-bar-percent">70%</div>
		</div> <!-- End Skill Bar -->

		<div class="skillbar clearfix " data-percent="90%">
			<div class="skillbar-title" style="background: #25b5f1;"><span>Wireframing</span></div>
			<div class="skillbar-bar" style="background: #25b5f1;"></div>
			<div class="skill-bar-percent">90%</div>
		</div> <!-- End Skill Bar -->

		<div class="skillbar clearfix " data-percent="70%">
			<div class="skillbar-title" style="background: #25b5f1;"><span>Communication</span></div>
			<div class="skillbar-bar" style="background: #25b5f1;"></div>
			<div class="skill-bar-percent">70%</div>
		</div> <!-- End Skill Bar -->

		<div class="skillbar clearfix " data-percent="90%">
			<div class="skillbar-title" style="background: #25b5f1;"><span>Wireframing</span></div>
			<div class="skillbar-bar" style="background: #25b5f1;"></div>
			<div class="skill-bar-percent">90%</div>
		</div> <!-- End Skill Bar -->
	</div> <!-- end skillbars-wrapper -->

<div class="skills-text">
<p><?php echo esc_html( CFS()->get( 'extra_info_2' ) ); ?></p>
</div> <!-- end .skills-text -->

</div> <!-- end of .skills-section-container -->

<h2><?php echo esc_html( CFS()->get( 'others_say' ) ); ?></h2>

<div class="testimony-container">
<div class="testimony-block">
<div class="testimony1"><p><?php echo esc_html( CFS()->get( 'testimony1' ) ); ?></p></div>
<div class="testimony-image1"><?php
$attachment_id = 46; // attachment ID
$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
if( $image_attributes ) {
?>
<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
<?php } ?>
</div>
<span class="testimony-caption"><p><?php echo esc_html( CFS()->get( 'testimony_image_caption1' ) ); ?></p></span>
</div><!-- .testimony-block -->

<div class="testimony-block">
<div class="testimony2"><p><?php echo esc_html( CFS()->get( 'testimony2' ) ); ?></p></div>
<div class="testimony-image2"><?php
$attachment_id = 46; // attachment ID
$image_attributes = wp_get_attachment_image_src( $attachment_id ); // returns an array
if( $image_attributes ) {
?>
<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
<?php } ?>
</div>
<span class="testimony-caption"><p><?php echo esc_html( CFS()->get( 'testimony_image_caption2' ) ); ?></p></span>
</div><!-- .testimony-block -->

</div> <!-- .testimony-container -->

				</div> <!-- .content-wrapper -->
			</div><!-- .content-->




		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
