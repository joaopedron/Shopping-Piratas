<?php
/**
 * @package _asv
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- featured image -->
	<section class="featured-image-single">
		<div class="overlay"></div>
		<?php 
		if (class_exists('MultiPostThumbnails')) : 
			MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
		endif;
		?>
	</section>
	<!-- featured image -->
	
	<!-- wrapper -->
	<div class="wrapper">
		<div class="entry">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<?php _asv_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			<!-- newsletter single -->
			<section class="newsletter-single">
				<h4>Receba nossas novidades!</h4>
				<?php include("newsletter.php"); ?>
			</section>
			<!-- newsletter single -->
			<!-- comments -->
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div><!--  -->
</article><!-- #post-## -->

