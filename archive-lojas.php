<?php
/**
 * Template Name: Lojas
 *
 * Displays content for portfolio page layouts
 *
 * @package _asv
 */

get_header(); ?>
    
    <section class="title-page title-store">
        <div class="wrapper">
            <h1>Lojas</h1>
        </div>
    </section>

    <div class="wrapper">        
        <!-- sidebar -->
        <section id="sidebar-store" class="sidebar stores">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>         
        </section>
        <!-- sidebar -->
        <section class="entry-store">
            <?php storeSingle(); ?>
        </section>
    </div>

<?php get_footer(); ?>