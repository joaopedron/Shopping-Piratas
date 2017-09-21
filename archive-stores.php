<?php
/**
 * Template Name: Stores
 *
 * Displays content for portfolio page layouts
 *
 * @package _asv
 */

get_header(); ?>
    
    <section class="title-page title-store">
        <div class="wrapper">
            <h1>Alimentação</h1>
        </div>
    </section>

    <div class="wrapper">        
        <!-- sidebar -->
        <section id="sidebar-store" class="sidebar stores">
            <h4>Categorias</h4>
            <?php 
                $args = array('parent' => 4);
                $categories = get_categories( $args );
                echo '<ul>';
                foreach($categories as $category) { 
                    echo '<li>';
                        echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' (<span>'. $category->count .'</span>)</a>';
                    echo '</li>';
                }
                echo '</ul>';
            ?>           
        </section>
        <!-- sidebar -->
        <section class="entry-store">
            <?php storeSingle(); ?>
        </section>
    </div>

<?php get_footer(); ?>