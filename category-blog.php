<?php
/**
* Template for category-blog
* @package _asv
*/
get_header(); ?>

<!-- Breadcrumb -->
<section class="title-page title-store">
    <div class="wrapper">
        <h1><?php single_cat_title(); ?></h1>
    </div>
</section>
<!-- Breadcrumb -->

<div class="wrapper">
    <!-- entry-blog -->
    <section class="entry-blog">
		<?php listBlogSingle(); ?>
    </section>
    <!-- /entry-blog -->

    <!-- sidebar -->
	<?php get_sidebar(); ?>
    <!-- /sidebar -->
</div>
<!-- wrapper -->

<?php get_footer(); ?>