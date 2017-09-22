<?php
/**
*
* @package _asv
*/

get_header(); ?>
    
    <section class="title-page title-store">
        <div class="wrapper">
            <h1><?php single_cat_title(); ?></h1>
        </div>
    </section>

    <div class="wrapper">        
        <!-- sidebar -->
        <section id="sidebar-store" class="sidebar stores">
            <h4>Categorias</h4>
            <?php 
                $args = array('parent' => 16);
                $categories = get_categories( $args );
                echo '<ul>';
                foreach($categories as $category) { 
                    echo '<li>';
                        echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> (<span>'. $category->count .'</span>)';
                    echo '</li>';
                }
                echo '</ul>';
            ?>           
        </section>
        <!-- sidebar -->
        <section class="entry-store">
        <?php foodSingle(); ?>
        </section>
    </div>

<?php get_footer(); ?>