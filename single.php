<?php
/**
 * The template for displaying all single posts.
 *
 * @package _asv
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-single" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<!-- <?php //_asv_post_nav(); ?> -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->
<?php get_footer(); ?>
