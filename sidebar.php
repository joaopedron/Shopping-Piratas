<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _asv
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<section class="sidebar">
    <div id="secondary" class="widget-area" role="complementary">
    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- #secondary -->
</section>
