<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _asv
 */
?>

<section class="breadcrumb">
    <div class="wrapper">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
</section>
    
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="wrapper">
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
