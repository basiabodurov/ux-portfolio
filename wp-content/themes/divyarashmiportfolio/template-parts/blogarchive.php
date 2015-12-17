<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-3">
	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ); ?>">

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<p class="postmeta">Posted on <?php red_starter_posted_on(); ?> / <?php red_starter_posted_by(); ?> / <?php the_category( ' ' ); ?></p>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		</a>
	</header><!-- .entry-header -->

	<div class="read-more">
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more-link">Read more</a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
